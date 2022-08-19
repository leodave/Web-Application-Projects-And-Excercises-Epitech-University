<template>
  <v-container>
    <v-row class="text-center">
      <v-btn justify="end" class="blue" text @click="switched">
        Personal Setting
      </v-btn>
      <span v-show="btn">
        <v-row>
          <v-col cols="12" v-if="user">
            <template>
              <span v-show="!edit"></span>
              <v-card>
                <br />
                <v-card-title>Name - {{ user.name }}</v-card-title>
                <br />
                <v-card-text>
                  {{ user.favourite }}
                </v-card-text>
                <h2 justify="start">Email - {{ user.email }}</h2>

                <br />

                <v-card-actions>
                  <v-btn color="deep-purple" text @click="change">Edit</v-btn>
                </v-card-actions>
              </v-card>
              <span v-show="edit">
                <v-form ref="form" class="mx-2" lazy-validation>
                  <v-row>
                    <v-col cols="12">
                      <v-text-field
                        v-model="name"
                        :rules="nameRules"
                        label="First Name"
                      ></v-text-field>
                    </v-col>
                  </v-row>
                  <v-row>
                    <v-col cols="12">
                      <v-text-field
                        v-model="email"
                        :rules="emailRules"
                        label="Email"
                        required
                      ></v-text-field>
                    </v-col>
                  </v-row>
                  <v-row>
                    <v-col cols="12">
                      <v-text-field
                        v-model="password"
                        type="password"
                        :rules="passwordRules"
                        label="Password"
                        required
                      ></v-text-field>
                    </v-col>
                  </v-row>

                  <v-checkbox
                    v-model="firstcheckbox"
                    :rules="[(v) => !!v || 'You must agree to continue!']"
                    label="I agree with Terms and Conditions"
                    required
                  ></v-checkbox>

                  <v-btn
                    class="purple darken-2 white--text mt-5"
                    @click="submitForm"
                  >
                    Change
                  </v-btn>
                </v-form>
              </span>
            </template>
          </v-col>
        </v-row>
      </span>
      <span v-show="!btn">
        <v-row class="text-center">
          <v-col cols="12" v-for="like in liked" :key="like._id">
            <template>
              <v-card class="mx-auto my-12" max-width="600">
                <template slot="progress">
                  <v-progress-linear
                    color="deep-purple"
                    height="10"
                    indeterminate
                  ></v-progress-linear>
                </template>

                <v-img height="400" :src="like.picture"></v-img>

                <v-card-title>title {{ like.title }}</v-card-title>
                <br />
                <v-card-text>
                  {{ like.description }}
                </v-card-text>
                <h2 justify="start">$ price {{ like.price }}</h2>
                <h2 justify="start">Rating{{ like.rating }}</h2>

                <br />
                <v-btn x-small class="my-4">Remaining seats</v-btn>
                <br />
                <h1 class="white blue--text">{{ like.seat }}</h1>

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
              </v-card>
            </template>
          </v-col>
        </v-row>
      </span>
    </v-row>
  </v-container>
</template>

<script>
import axios from "axios";
export default {
  name: "MyProfile",

  data() {
    return {
      user: "",
      liked: "",
      btn: false,
      edit: false,
      name: "",
      nameRules: [
        (v) => !!v || "Name is required",
        (v) => (v && v.length <= 10) || "Name must be less than 10 characters",
      ],
      email: "",
      emailRules: [
        (v) => !!v || "E-mail is required",
        (v) =>
          /^(([^<>()[\]\\.,;:\s@']+(\.[^<>()\\[\]\\.,;:\s@']+)*)|('.+'))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
            v
          ) || "E-mail must be valid",
      ],
      password: "",
      passwordRules: [
        (v) => !!v || "Password is required",
        (v) =>
          /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/.test(v) ||
          "Password must contain at least lowercase letter, one number, a special character and one uppercase letter",
      ],
      firstcheckbox: false,
    };
  },
  async created() {
    let res = await axios.get("http://localhost:3000/users/" + localStorage.id);
    let movies = await axios.get("http://localhost:3000/movies");
    let fav = res.data.favourite;
    console.log("my fav", fav);
    let movieId = movies.data;
    console.log(movieId);

    this.liked = movieId.filter((movie) => {
      return fav.includes(movie._id);
    });
    console.log("ñovies:", this.liked);

    this.user = res.data;
  },
  methods: {
    async switched() {
      this.btn = !this.btn;
    },
    async change() {
      this.edit = !this.edit;
    },
    async submitForm() {
      this.$refs.form.validate();
      let res = await axios.patch(
        "http://localhost:3000/users/" + localStorage.id,
        {
          name: this.name,
          email: this.email,
          password: this.password,
        }
      );
      localStorage.removeItem("token");
      console.log(res);
      this.$router.push("/login");
    },
  },
};
</script>
