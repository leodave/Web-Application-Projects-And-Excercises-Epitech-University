<template>
  <v-container>
    <v-card elevation="10">
      <v-row>
        <v-col cols="12" class="pl-10">
          <v-form>
            <v-row>
              <v-col cols="12">
                <v-text-field
                  v-model="drink"
                  label="drink"
                  required
                ></v-text-field>
                <v-btn elevation="2" color="blue" @click="find(drink)">
                  Find
                </v-btn>
              </v-col>
            </v-row>
          </v-form>

          <v-row>
            <v-col cols="4" v-for="drink in drinks" :key="drink.idDrink">
              <v-card class="mx-auto my-12" max-width="374">
                <template slot="progress">
                  <v-progress-linear
                    color="deep-purple"
                    height="10"
                    indeterminate
                  ></v-progress-linear>
                </template>

                <v-img height="300" :src="drink.strDrinkThumb"></v-img>

                <v-card-title>
                  <h2>{{ drink.strDrink }}</h2>
                </v-card-title>
                <v-card-title class="blue">Ingridients</v-card-title>
                <h3>
                  {{ drink.strIngredient1 }},{{ drink.strIngredient2 }},{{
                    drink.strIngredient3
                  }},{{ drink.strIngredient4 }}
                </h3>
                <v-card-text>
                  <h3>1</h3>
                  {{ drink.strInstructionsDE.slice(0, 30) }}
                </v-card-text>
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
  name: "HelloWorld",

  data() {
    return {
      drinks: [],
      drink: "",
    };
  },

  methods: {
    async find(drink) {
      let ver = {
        headers: {
          auth: localStorage.getItem("token"),
        },
      };
      let res = await axios.get("http://localhost:3001/drinks/" + drink);

      this.drinks = res.data.drinks.slice(0, 3);

      await axios.post(
        "http://localhost:3001/users/components",
        {
          component: {
            drink: drink,
          },
        },

        ver
      );
    },
  },
};
</script>
