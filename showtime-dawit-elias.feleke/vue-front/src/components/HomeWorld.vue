<template>
  <v-container>
    <v-row class="text-center">
      <v-col cols="4" v-for="movie in movies" :key="movie._id">
        <template>
          <v-card class="mx-auto my-12" max-width="374">
            <template slot="progress">
              <v-progress-linear
                color="deep-purple"
                height="10"
                indeterminate
              ></v-progress-linear>
            </template>

            <v-img height="250" :src="movie.picture"></v-img>

            <v-card-title>{{ movie.title }}</v-card-title>
            <br />
            <v-card-text>
              Small plates, salads & sandwiches - an intimate setting with 12
              indoor seats plus patio seating.
              {{ movie.description }}
            </v-card-text>
            <h2 justify="start">
              $ price
              <br />
              <h1 class="white purple--text">{{ movie.price }}</h1>
            </h2>
            <h2 justify="start">Rating{{ movie.rating }}</h2>

            <v-btn x-small class="my-4">Remaining seats</v-btn>
            <br />
            <h1 class="white blue--text">{{ movie.seat }}</h1>

            <br />

            <v-card-text>
              <v-row align="center" class="mx-0">
                <v-rating
                  :value="4.5"
                  color="amber"
                  dense
                  half-increments
                  readonly
                  size="14"
                ></v-rating>

                <div class="grey--text ms-4">4.5 (413)</div>
              </v-row>
            </v-card-text>

            <v-card-actions>
              <router-link
                style="text-decoration: none; color: black"
                :to="{ name: 'MoviesId', params: { id: movie._id } }"
              >
                <v-btn color="deep-purple" text>Book ticket</v-btn>
              </router-link>
            </v-card-actions>
          </v-card>
        </template>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import axios from "axios";
export default {
  name: "HomeWorld",

  data() {
    return {
      movies: [],
    };
  },
  async created() {
    let res = await axios.get("http://localhost:3000/movies");
    console.log(res.data);
    this.movies = res.data;
  },
};
</script>
