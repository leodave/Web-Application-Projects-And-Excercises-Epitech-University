<template>
  <section>
    <v-card>
      <section>
        <v-sheet class="mx-auto mt-10" elevation="10" max-width="1000">
          <v-slide-group v-model="model" class="pa-4" center-active show-arrows>
            <v-slide-item v-for="n in 15" :key="n" v-slot="{ active, toggle }">
              <v-card
                :color="active ? 'primary' : 'white'"
                class="ma-4 grey lighten-1"
                height="250"
                width="300"
                @click="toggle"
              >
                <v-row>
                  <v-col cols="6" v-for="red in words" :key="red.id">
                    <h4>{{ red.title }}</h4>
                    <h4>{{ red.subreddit.slice(0, 20) }}</h4>
                    {{ red.selftext.slice(0, 100) }}

                    {{ red.author }}
                  </v-col>
                </v-row>

                <v-row class="fill-height" align="center" justify="center">
                  <v-scale-transition>
                    <v-icon
                      v-if="active"
                      color="white"
                      size="48"
                      v-text="'mdi-close-circle-outline'"
                    ></v-icon>
                  </v-scale-transition>
                </v-row>
              </v-card>
            </v-slide-item>
          </v-slide-group>
          <v-btn color="blue" @click="deletedreddit(word)">Delete</v-btn>
        </v-sheet>
      </section>
    </v-card>
  </section>
</template>
<script>
import axios from "axios";
export default {
  name: "ReddyWorld",
  props: {
    word: { Object },
  },

  data() {
    return {
      words: [],
      model: null,
    };
  },
  async created() {
    let res = await axios.get("http://localhost:3001/reddit/" + this.word.word);
    this.words = res.data.slice(0, 9);
  },
  methods: {
    async deletedreddit(wor) {
      console.log(wor);
      let ver = {
        headers: {
          auth: localStorage.getItem("token"),
        },
      };
      axios.get("http://localhost:3001/users/removereddit/" + wor.word, ver);
      location.reload();
    },
  },
};
</script>
