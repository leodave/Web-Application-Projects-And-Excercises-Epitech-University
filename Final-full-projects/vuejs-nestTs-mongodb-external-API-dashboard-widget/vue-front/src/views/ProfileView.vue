<template>
  <v-layout fill-height app>
    <v-row v-if="file" class="grey lighten-2">
      <v-col cols="8" class="d-flex justify-center align-center">
        <v-row>
          <v-col cols="2"></v-col>
          <v-col cols="10" height="400">
            <v-card class="white">
              <v-form>
                <v-text-field
                  height="70"
                  v-model="name"
                  required
                  class="display-1"
                >
                  <template v-slot:label>
                    <h1>Name-->{{ file.name }}</h1>
                  </template>
                </v-text-field>

                <v-text-field v-model="email" required class="display-1">
                  <template v-slot:label>
                    <h1>Email-->{{ file.email }}</h1>
                  </template>
                </v-text-field>

                <v-text-field
                  v-model="password"
                  label=" new password"
                  required
                  class="display-1"
                ></v-text-field>
                <v-btn @click="update" color="blue">update</v-btn>
              </v-form>
            </v-card>
          </v-col>
        </v-row>
      </v-col>
      <v-col cols="4"></v-col>
    </v-row>
  </v-layout>
</template>
<script>
import axios from "axios";
export default {
  name: "profieView",
  data() {
    return {
      file: "",
      name: "",
      email: "",
      password: "",
    };
  },
  async created() {
    let ver = {
      headers: {
        auth: localStorage.getItem("token"),
      },
    };
    let person = await axios.get("http://localhost:3001/users/myprofile", ver);
    this.file = person.data;
  },
  methods: {
    async update() {
      let ver = {
        headers: {
          auth: localStorage.getItem("token"),
        },
      };
      await axios.patch(
        "http://localhost:3001/users/updateprofile",
        {
          name: this.name,
          email: this.email,
          password: this.password,
        },
        ver
      );
      this.$router.push("/login");
    },
  },
};
</script>
