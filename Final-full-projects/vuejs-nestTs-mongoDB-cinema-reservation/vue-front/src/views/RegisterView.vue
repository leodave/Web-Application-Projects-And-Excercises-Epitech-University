<template>
  <section>
    <v-app-bar app color="primary" dark>
      <v-row justify="end">
        <router-link
          style="text-decoration: none; color: black"
          :to="{ name: 'HomePage' }"
        >
          <v-btn class="mr-5" large color="dark" elevation="2">Home</v-btn>
        </router-link>
      </v-row>

      <v-spacer></v-spacer>

      <router-link
        style="text-decoration: none; color: black"
        :to="{ name: 'Login' }"
      >
        <v-btn class="mr-5" color="primary" elevation="2">Login</v-btn>
      </router-link>
    </v-app-bar>
    <RegisterUser />
  </section>
</template>
<script>
import RegisterUser from "../components/RegisterUser";

export default {
  name: "RegisterView",

  components: {
    RegisterUser,
  },
};
</script>
