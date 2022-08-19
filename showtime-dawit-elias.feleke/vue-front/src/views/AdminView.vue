<template>
  <v-container>
    <v-row class="text-center">
      <router-link
        style="text-decoration: none; color: black"
        :to="{ name: 'MyUsers' }"
      >
        <v-btn color="deep-purple" text>Users</v-btn>
      </router-link>
      <router-link
        style="text-decoration: none; color: black"
        :to="{ name: 'NewMovie' }"
      ></router-link>
      <v-btn color="deep-purple" text @click="Add">Add New Movie</v-btn>
      <span v-show="!btn">
        <v-row>
          <span v-show="!edit">
            <v-row>
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
                      {{ movie.description }}
                    </v-card-text>
                    <h2 justify="start">
                      $ price
                      <p class="white blue--text">{{ movie.price }}</p>
                    </h2>
                    <!--<h2 justify="start">Rating{{ movie.rating }}</h2>-->

                    <h2>Remaining seats</h2>
                    <h1 class="white blue--text">{{ movie.seat }}</h1>

                    <v-card-actions>
                      <v-btn
                        color="deep-purple"
                        text
                        @click="deleted(movie._id)"
                      >
                        Delete
                      </v-btn>
                      <v-btn
                        color="deep-purple"
                        text
                        @click="change(movie._id)"
                      >
                        Edit
                      </v-btn>
                    </v-card-actions>
                  </v-card>
                </template>
              </v-col>
            </v-row>
          </span>
          <span v-show="edit">
            <v-container>
              <v-row>
                <v-col cols="12" md="4">
                  <v-text-field
                    v-model="tit"
                    label="Movie Title"
                    required
                  ></v-text-field>
                </v-col>

                <v-col cols="12" md="4">
                  <v-text-field
                    v-model="des"
                    label="Description"
                    required
                  ></v-text-field>
                </v-col>

                <v-col cols="12" md="4">
                  <v-text-field
                    v-model="pri"
                    label="Price"
                    required
                  ></v-text-field>
                </v-col>
                <v-col cols="12" md="4">
                  <v-text-field
                    v-model="pic"
                    label="Picture"
                    required
                  ></v-text-field>
                </v-col>
                <v-col cols="12" md="4">
                  <v-text-field
                    v-model="seating"
                    label="Seat"
                    required
                  ></v-text-field>
                </v-col>
              </v-row>
              <v-btn class="blue" text @click="Edited">Save</v-btn>
            </v-container>
          </span>
        </v-row>
      </span>
      <span v-show="btn">
        <template>
          <v-container>
            <v-row>
              <v-col cols="12" md="4">
                <v-text-field
                  v-model="title"
                  label="Movie Title"
                  required
                ></v-text-field>
              </v-col>

              <v-col cols="12" md="4">
                <v-text-field
                  v-model="description"
                  label="Description"
                  required
                ></v-text-field>
              </v-col>

              <v-col cols="12" md="4">
                <v-text-field
                  v-model="price"
                  label="price"
                  required
                ></v-text-field>
              </v-col>
              <v-col cols="12" md="4">
                <v-text-field
                  v-model="picture"
                  label="Picture"
                  required
                ></v-text-field>
              </v-col>
              <v-col cols="12" md="4">
                <v-text-field
                  v-model="seat"
                  label="seating"
                  required
                ></v-text-field>
                <v-select
                  :items="items"
                  v-model="category"
                  label="Categories"
                  solo
                ></v-select>
              </v-col>
            </v-row>
            <v-btn class="blue" text @click="save">ADD</v-btn>
          </v-container>
        </template>
      </span>
    </v-row>
  </v-container>
</template>

<script>
import axios from "axios";
// eslint-disable-next-line
export default {
  name: "AdminView",

  data() {
    return {
      movies: [],
      title: "",
      description: "",
      price: "",
      picture: "",
      tit: "",
      des: "",
      pri: "",
      pic: "",
      id: "",
      seat: "",
      seating: "",
      caregory: "",
      items: ["Comedy", "action", "adventure", "horror"],

      btn: false,
      edit: false,
    };
  },
  async created() {
    let res = await axios.get("http://localhost:3000/movies");
    console.log(res.data);
    this.movies = res.data;
    //console.log(ver);
  },
  methods: {
    async deleted(id) {
      let res = await axios.delete("http://localhost:3000/movies/" + id);
      console.log(res.data);
      window.location.reload();
    },
    Add() {
      this.btn = !this.btn;
    },
    change(id) {
      this.edit = !this.edit;
      this.id = id;
      console.log(id);
    },
    async save() {
      let res = await axios.post("http://localhost:3000/movies", {
        title: this.title,
        description: this.description,
        price: this.price,
        picture: this.picture,
        seat: this.seat,
      });
      console.log(res.data);
      window.location.reload();
    },
    async Edited(id) {
      id = this.id;
      console.log(id);
      let res = await axios.patch("http://localhost:3000/movies/" + id, {
        title: this.tit,
        description: this.des,
        price: this.pri,
        picture: this.pic,
        seat: this.seating,
      });
      console.log(res.data);
      window.location.reload();
    },
  },
};
</script>
