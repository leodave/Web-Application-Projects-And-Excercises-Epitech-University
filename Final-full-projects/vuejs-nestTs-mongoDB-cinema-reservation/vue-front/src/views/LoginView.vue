<template>
  <section>
    <v-app-bar app color="primary" dark>
      <v-row justify="end">
        <router-link style="text-decoration: none; color: black" to="/">
          <v-btn class="mr-5" large color="dark" elevation="2">Home</v-btn>
        </router-link>
      </v-row>

      <v-spacer></v-spacer>

      <router-link to="/Register" style="text-decoration: none; color: black">
        <v-btn color="primary" elevation="2">Register</v-btn>
      </router-link>
    </v-app-bar>
    <LoginUser />
  </section>
</template>
<script>
import LoginUser from "../components/LoginUser";

export default {
  name: "LoginView",

  components: {
    LoginUser,
  },
};
</script>
