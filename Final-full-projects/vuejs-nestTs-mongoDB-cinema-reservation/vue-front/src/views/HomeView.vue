<template>
  <section>
    <v-app-bar app color="primary" dark>
      <v-row justify="end">
        <router-link
          class="mt-6"
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

      <router-link to="/Register" style="text-decoration: none; color: black">
        <v-btn color="primary" elevation="2">Register</v-btn>
      </router-link>
    </v-app-bar>
    <HomeWorld />
  </section>
</template>

<script>
import HomeWorld from "../components/HomeWorld";

export default {
  name: "myHome",

  components: {
    HomeWorld,
  },
  data() {
    return {
      caregory: "",
      items: ["Comedy", "action", "adventure", "horror"],
    };
  },
};
</script>
