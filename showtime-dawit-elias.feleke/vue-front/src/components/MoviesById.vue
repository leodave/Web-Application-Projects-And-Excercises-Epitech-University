<template>
  <v-container>
    <v-row class="text-center">
      <v-col cols="12" v-if="movie">
        <template>
          <div v-if="message" class="form-message is-error-message">
            {{ message }}
          </div>
          <v-card class="mx-auto my-12" max-width="600">
            <template slot="progress">
              <v-progress-linear
                color="deep-purple"
                height="10"
                indeterminate
              ></v-progress-linear>
            </template>

            <v-img height="400" :src="movie.picture"></v-img>

            <v-card-title>{{ movie.title }}</v-card-title>
            <br />
            <v-card-text>
              Small plates, salads & sandwiches - an intimate setting with 12
              indoor seats plus patio seating.
              {{ movie.description }}
            </v-card-text>
            <h2 justify="start">$ price{{ movie.price }}</h2>
            <h2 justify="start">Rating{{ movie.rating }}</h2>
            <h2 justify="start">
              Remaining seats
              <h2 class="white blue--text">{{ movie.seat }}</h2>
            </h2>

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
              <v-btn color="deep-purple" text @click="book">Book ticket</v-btn>
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
  name: "MoviesById",

  data() {
    return {
      movie: "",
      message: "",
    };
  },
  async created() {
    this.message = "";
    try {
      let ver = {
        headers: {
          auth: localStorage.getItem("token"),
        },
      };
      let res = await axios.get(
        "http://localhost:3000/movies/" + this.$route.params.id,
        ver
      );

      //console.log(res.data);
      this.movie = res.data;
    } catch (err) {
      this.message = "Please Log In!!";
      this.$router.push("/login");
    }
  },
  methods: {
    async book() {
      let res = await axios.post("http://localhost:3000/movies/book", {
        id: this.movie._id,
      });
      console.log(res);
      window.location.reload();
    },
  },
};
</script>
