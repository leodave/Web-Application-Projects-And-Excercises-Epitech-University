<template>
  <v-container>
    <span v-show="!btn">
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

              <v-card-title class="white black--text">
                {{ movie.title }}
              </v-card-title>
              <br />
              <v-card-text>
                Small plates, salads & sandwiches - an intimate setting with 12
                indoor seats plus patio seating.
                {{ movie.description }}
              </v-card-text>
              <h2 justify="start">
                price
                <h1 class="white purple--text">{{ movie.price }}</h1>
              </h2>
              <h2 justify="start">Rating{{ movie.rating }}</h2>

              <div v-show="!movie.saved">
                <v-btn x-small class="my-4" @click="later(movie._id)">
                  Save for later
                </v-btn>
              </div>
              <div class="blue" v-show="movie.saved">
                <v-btn x-small class="my-4" @click="later(movie._id)">
                  Save for later
                </v-btn>
              </div>

              <br />

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
    </span>
    <span v-show="btn"></span>
  </v-container>
</template>

<script>
import axios from "axios";
export default {
  name: "HomeWorld",

  data() {
    return {
      movies: [],
      btn: false,
      store: "",
    };
  },
  async created() {
    try {
      let ver = {
        headers: {
          auth: localStorage.getItem("token"),
        },
      };
      let res = await axios.get("http://localhost:3000/movies/home", ver);

      this.movies = res.data;
      let url = "http://localhost:3000/users/" + localStorage.id;
      let user = await axios.get(url);
      console.log(user);
      this.store = localStorage.id;
      const fav = user.data.favourite;
      console.log("fav:", fav);
      //console.log("movies:", this.movies);
      this.movies = this.movies.map((movie) => {
        // console.log(movie);
        movie.saved = fav.includes(movie._id);
        return movie;
      });
      console.log("ñovies:", this.movies);
    } catch (err) {
      this.$router.push("/login");
    }
  },
  methods: {
    async later(id) {
      let res = await axios.post(
        "http://localhost:3000/users/favourite/" + localStorage.id,
        { moviesId: id }
      );
      console.log(res.data._id);
      console.log(id);
      window.location.reload();
    },
    myprofile() {
      this.btn = !this.btn;
    },
  },
};
</script>
