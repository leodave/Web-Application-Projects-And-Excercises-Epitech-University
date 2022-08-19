<template>
  <section>
    <v-card class="mt-15" elevation="10">
      <v-row>
        <v-col cols="4" v-for="(drink, i) in drinks" :key="i">
          <v-card class="mx-auto my-12 grey lighten-2" max-width="374">
            <template slot="progress">
              <v-progress-linear
                color="deep-purple"
                height="10"
                indeterminate
              ></v-progress-linear>
            </template>

            <v-img height="250" :src="drink.strDrinkThumb"></v-img>

            <v-card-title>
              <h2>{{ drink.strDrink }}</h2>
            </v-card-title>
            <v-card-title class="grey lighten-2 black--text">
              Ingridients
            </v-card-title>
            <h3>
              {{ drink.strIngredient1 }},{{ drink.strIngredient2 }},{{
                drink.strIngredient3
              }},{{ drink.strIngredient4 }}
            </h3>
            <v-card-text>
              {{ drink.strInstructionsDE.slice(0, 30) }}
            </v-card-text>
          </v-card>
        </v-col>
      </v-row>
      <v-btn color="blue" @click="deletedweather(dream)">Delete</v-btn>
    </v-card>
  </section>
</template>
<script>
import axios from "axios";
export default {
  name: "DriWorld",
  props: {
    dream: { Object },
  },

  data() {
    return {
      drinks: [],
    };
  },
  async created() {
    let res = await axios.get(
      "http://localhost:3001/drinks/" + this.dream.drink
    );
    this.drinks = res.data.drinks.slice(0, 3);
  },
  methods: {
    async deletedweather(dri) {
      console.log(dri);
      let ver = {
        headers: {
          auth: localStorage.getItem("token"),
        },
      };
      axios.get("http://localhost:3001/users/removedrink/" + dri.drink, ver);
      location.reload();
    },
  },
};
</script>
