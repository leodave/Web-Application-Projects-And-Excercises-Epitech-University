<template>
  <v-form ref="form" class="mx-2" lazy-validation>
    <v-row>
      <v-col cols="6">
        <v-text-field
          v-model="name"
          :rules="nameRules"
          label="First Name"
        ></v-text-field>
      </v-col>
    </v-row>
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

    <v-checkbox
      v-model="firstcheckbox"
      :rules="[(v) => !!v || 'You must agree to continue!']"
      label="I agree with Terms and Conditions"
      required
    ></v-checkbox>

    <v-btn class="purple darken-2 white--text mt-5" @click="submitForm">
      Register
    </v-btn>
  </v-form>
</template>
<script>
import axios from "axios";
export default {
  data() {
    return {
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
  methods: {
    async submitForm() {
      this.$refs.form.validate();
      let res = await axios.post("http://localhost:3000/users", {
        name: this.name,
        email: this.email,
        password: this.password,
      });
      console.log(res);
      this.$router.push("/login");
    },
  },
};
</script>
