<template>
  <v-container>
    <v-row class="text-center"></v-row>
    <template>
      <v-form>
        <v-container>
          <v-row>
            <v-col cols="12" md="4">
              <v-text-field v-model="game" label="game" required></v-text-field>

              <v-btn elevation="2" color="blue" @click="gamer(game)">
                search
              </v-btn>
            </v-col>
          </v-row>
        </v-container>
      </v-form>
      <v-row>
        <v-col cols="3">
          <v-card>{{ gaming }}</v-card>
        </v-col>
      </v-row>
    </template>
  </v-container>
</template>
<script>
import axios from "axios";
export default {
  name: "GameWorld",

  data() {
    return {
      gaming: [],
      game: "",
    };
  },

  methods: {
    async gamer(game) {
      let res = await axios.get("http://localhost:3001/game/" + game);
      this.gaming = res.data.response.player_count;
      console.log(this.gaming);
    },
  },
};
</script>
