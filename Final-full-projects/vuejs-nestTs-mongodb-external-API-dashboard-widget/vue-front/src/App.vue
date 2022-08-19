<template>
  <div id="app">
    <template>
      <v-app id="inspire">
        <v-navigation-drawer
          v-model="drawer"
          app
          class="deep-purple accent-4"
          dark
          permanen
        >
          <v-list>
            <v-list>
              <v-btn dark>
                <router-link to="/Dashboard">DashBorard</router-link>
              </v-btn>
              <v-btn dark class="mt-10">
                <router-link to="/home">New Search</router-link>
              </v-btn>
              <br />
              <v-btn dark class="mt-10">
                <router-link to="/login">Login</router-link>
              </v-btn>
              <br />
              <v-btn dark class="mt-10">
                <router-link to="/register">Register</router-link>
              </v-btn>
            </v-list>
          </v-list>
          <template v-slot:append>
            <div class="pa-2">
              <v-btn block @click="logout">Logout</v-btn>
            </div>
          </template>
        </v-navigation-drawer>

        <v-app-bar app color="deep-purple accent-4" dense dark>
          <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>

          <v-toolbar-title>Dashboard</v-toolbar-title>
          <v-spacer></v-spacer>
          <v-btn dark class="rounded-pill">
            <router-link to="/profile">My profle</router-link>
          </v-btn>
        </v-app-bar>
        <v-main style="background-color: rgb(235, 235, 235)">
          <router-view />
        </v-main>
      </v-app>
    </template>
  </div>
</template>
<script>
export default {
  name: "AppView",
  data() {
    return {
      drawer: null,
    };
  },
  methods: {
    logout() {
      localStorage.removeItem("token");
      this.$router.push("/home");
    },
  },
};
</script>

<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

nav {
  padding: 30px;

  a {
    font-weight: bold;
    color: #2c3e50;

    &.router-link-exact-active {
      color: #42b983;
    }
  }
}
</style>
