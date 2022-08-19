<template>
  <v-container>
    <v-row>
      <v-col cols="7">
        <v-card>
          <v-form ref="form" class="mx-2 mt-15" lazy-validation>
            <v-row>
              <v-col cols="6">
                <v-text-field v-model="name" label="First Name"></v-text-field>
              </v-col>
            </v-row>
            <v-row>
              <v-col cols="6">
                <v-text-field
                  v-model="email"
                  label="Email"
                  required
                ></v-text-field>
              </v-col>
            </v-row>
            <v-row>
              <v-col cols="6">
                <v-text-field
                  v-model="password"
                  type="password"
                  label="Password"
                  required
                ></v-text-field>
              </v-col>
            </v-row>

            <v-btn
              class="purple darken-2 white--text mt-15"
              @click="submitForm"
            >
              Register
            </v-btn>
          </v-form>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>
<script>
import axios from "axios";
export default {
  data() {
    return {
      name: "",
      email: "",
      password: "",
    };
  },
  methods: {
    async submitForm() {
      await axios.post("http://localhost:3001/users", {
        name: this.name,
        email: this.email,
        password: this.password,
      });
      this.$router.push("/login");
    },
  },
};
</script>
