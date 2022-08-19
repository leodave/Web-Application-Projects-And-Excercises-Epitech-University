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

      <v-btn class="mr-5" color="primary" elevation="2" @click="logout">
        Log Out
      </v-btn>
    </v-app-bar>
    <MyProfile />
  </section>
</template>
<script>
import MyProfile from "../components/MyProfile";

export default {
  name: "MyProfileView",

  components: {
    MyProfile,
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
