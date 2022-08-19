<template>
  <section>
    <v-app-bar app color="primary" dark>
      <v-row justify="end">
        <v-col cols="4">
          <v-select
            :items="items"
            v-model="category"
            label="Filter By"
            solo
          ></v-select>
        </v-col>
      </v-row>

      <v-spacer></v-spacer>
      <router-link
        style="text-decoration: none; color: black"
        :to="{ name: 'MyProfile', params: { id: store } }"
      >
        <v-btn class="mr-5" color="dark" large elevation="2">My Profile</v-btn>
      </router-link>

      <v-btn class="mr-5" color="primary" elevation="2" @click="logout">
        Log Out
      </v-btn>
    </v-app-bar>
    <HomePageWorld />
  </section>
</template>

<script>
import HomePageWorld from "../components/HomePageWorld";

export default {
  name: "HomePage",

  components: {
    HomePageWorld,
  },
  data() {
    return {
      store: "",
      caregory: "",
      items: ["Comedy", "action", "adventure", "horror"],
    };
  },
  async created() {
    this.store = localStorage.id;
    //console.log(this.store);
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
