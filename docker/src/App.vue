<template>
  <v-app class="blue">
    <v-app-bar app color="" dark>
      <v-btn x-large success><router-link to="/">Home</router-link></v-btn>
      <v-btn x-large success
        ><router-link to="/about">About</router-link></v-btn
      >
      <v-btn x-large success
        ><router-link to="/notes">MyNotes</router-link></v-btn
      >
      <v-btn x-large success
        ><router-link to="/addnotes">ADD Notes</router-link></v-btn
      >

      <v-spacer>--------------></v-spacer>
      <h1 class="display-3 purple lighten-0 dark--text">Notty</h1>
    </v-app-bar>

    <v-main>
      <router-view />
    </v-main>
  </v-app>
</template>

<script>
export default {
  name: "App",

  data: () => ({
    //
  }),
};
</script>
