<template>
  <section>
    <v-form ref="form" class="mx-2" lazy-validation>
      <v-row>
        <v-col cols="6">
          <v-text-field
            v-model="email"
            :rules="emailRules"
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
            :rules="passwordRules"
            label="Password"
            required
          ></v-text-field>
        </v-col>
      </v-row>

      <v-btn class="purple darken-2 white--text mt-5" @click="SubmitForm">
        Login
      </v-btn>
    </v-form>
  </section>
</template>
<script>
import axios from "axios";
export default {
  data() {
    return {
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
    };
  },
  methods: {
    async SubmitForm() {
      try {
        let res = await axios.post("http://localhost:3000/users/Login", {
          email: this.email,
          password: this.password,
        });
        if (!res.data.err) {
          localStorage.setItem("token", res.data.token);
          localStorage.setItem("id", res.data.id);
          localStorage.setItem("favId", res.data.fav);
        }
        // console.log(res.data.fav);
        this.$router.push("/home");
      } catch (err) {
        window.location.reload();
      }
    },
  },
};
</script>
