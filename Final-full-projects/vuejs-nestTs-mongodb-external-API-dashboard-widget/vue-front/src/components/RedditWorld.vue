<template>
  <v-container>
    <v-card elevation="10">
      <v-row>
        <v-col cols="12">
          <v-form>
            <v-row>
              <v-col cols="12">
                <v-text-field
                  v-model="word"
                  label="search reddit"
                  required
                ></v-text-field>

                <v-btn elevation="2" color="blue" @click="redit(word)">
                  search
                </v-btn>
              </v-col>
            </v-row>
          </v-form>

          <v-row>
            <v-col cols="4" v-for="red in reddit" :key="red.id">
              <v-card class="mx-auto" max-width="400">
                <v-list-item two-line>
                  <v-list-item-content>
                    <v-list-item-title class="text-h10">
                      <h3>{{ red.subreddit }}</h3>
                      <h6>{{ red.selftext }}</h6>
                    </v-list-item-title>
                    <v-list-item-subtitle>
                      <h4>{{ red.author }}</h4>
                      <h4>{{ red.title }}</h4>
                      <h4>{{ red.ups }}</h4>
                      <h4>{{ red.downs }}</h4>
                    </v-list-item-subtitle>
                  </v-list-item-content>
                </v-list-item>
              </v-card>
            </v-col>
          </v-row>
        </v-col>
      </v-row>
    </v-card>
  </v-container>
</template>
<script>
import axios from "axios";
export default {
  name: "RedditWorld",

  data() {
    return {
      reddit: [],
      word: "",
    };
  },

  methods: {
    async redit(word) {
      let ver = {
        headers: {
          auth: localStorage.getItem("token"),
        },
      };

      let res = await axios.get("http://localhost:3001/reddit/" + word);
      this.reddit = res.data.slice(0, 9);

      await axios.post(
        "http://localhost:3001/users/components",
        {
          component: {
            word: word,
          },
        },

        ver
      );
    },
  },
};
</script>
