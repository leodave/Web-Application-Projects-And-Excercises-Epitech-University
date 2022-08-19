<template>
  <div id="app">
    <v-app-bar id="navigationBar">
      <v-row rows="6">
        <v-col cols="1">
          <img 
            src="./assets/postIcon.jpg" 
            alt="POST APP" 
            style="height: 50px"
            >
          </v-col>
        <v-col cols="1">
          </v-col>
        <v-col cols="7"> 
        </v-col>
        <v-col cols="1" class="marginTop15Px">
          <router-link 
            to="/dashboard" 
            style="
              text-decoration: none; 
              color: black" 
              v-show="loggedIn"
            >My Posts
          </router-link
          >
        </v-col>
        <v-col cols="1" class="marginTop15Px">
          <router-link 
            to="/allposts" 
            style="
              text-decoration: none; 
              color: black
            " 
            v-show="loggedIn"
            >All Posts
          </router-link>
        </v-col>
        <v-col cols="1" class="marginTop15Px">
          <a 
            href="#logout" 
            style="
              text-decoration: none; 
              color: black" 
              @click.prevent="logout" 
              v-show="loggedIn"
            >Logout
          </a>
        </v-col>
      </v-row>
    </v-app-bar>
    <transition
      mode="out-in"
      enter-active-class="animate__animated animate__bounceInLeft animate__faster"
      leave-active-class="animate__animated animate__fadeOutRight animate__faster"
    >
      <router-view />
    </transition>
  </div>
</template>

<script>
export default {
name: 'App',
  data() {
    return {
      loggedIn: localStorage.getItem('isLoggedIn'),
    };
  },
  methods: {
    async logout() {
      await this.$store.dispatch('logout');
      this.$router.push({ name: 'HomeView' });
      window.location.reload();
    },
  },
}
</script>

<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  background-color: #E9EFC0;
}

.marginTop15Px {
  margin-top: 15px;
}

#navigationBar {
  background-color: #69c99e;
}

.v-toolbar__content {
  justify-content: center;
}

v-app-bar {
  margin-bottom: 50px;
}

nav {
  padding: 30px;

  a {
    font-weight: bold;
    color: #2c3e50;

    &.router-link-exact-active {
      color: black;
    }
  }
}
</style>
