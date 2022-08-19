<template>
  <v-container>
    <v-row>
      <v-col cols="7" justify="center">
        <v-card>
          <v-form ref="form" class="mx-2 mt-15" lazy-validation>
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

            <v-btn class="purple darken-2 white--text mt-5" @click="SubmitForm">
              Login
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
      email: "",

      password: "",
    };
  },
  methods: {
    async SubmitForm() {
      try {
        let res = await axios.post("http://localhost:3001/users/Login", {
          email: this.email,
          password: this.password,
        });
        if (!res.data.err) {
          localStorage.setItem("token", res.data.token);
          this.$router.push("/home");
        }
      } catch (err) {
        err;
      }
    },
  },
};
</script>
