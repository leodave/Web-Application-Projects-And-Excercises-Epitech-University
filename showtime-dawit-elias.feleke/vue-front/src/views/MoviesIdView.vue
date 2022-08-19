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
        <v-btn class="mr-5" large color="dark" elevation="2">Movies</v-btn>
        <v-btn color="dark" large elevation="2">Events</v-btn>
      </v-row>

      <v-spacer></v-spacer>
      <router-link
        style="text-decoration: none; color: black"
        :to="{ name: 'MyProfile' }"
      >
        <v-btn class="mr-5" color="dark" large elevation="2">My Profile</v-btn>
      </router-link>

      <v-btn class="mr-5" color="primary" elevation="2" @click="logout">
        Log Out
      </v-btn>
    </v-app-bar>
    <MoviesById />
  </section>
</template>
<script>
import MoviesById from "../components/MoviesById";

export default {
  name: "MoviesIdView",

  components: {
    MoviesById,
  },
  methods: {
    logout() {
      console.log("hello");
      localStorage.removeItem("token");
      this.$router.push("/");
    },
  },
};
</script>
