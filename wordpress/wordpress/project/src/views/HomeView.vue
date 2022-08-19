<template>
  <v-app id="inspire">
    <v-main>
      <v-container fluid style="margin-top: 150px">
        <v-layout align-center justify-center>
          <v-flex xs12 sm8 md4>
            <v-card class="elevation-12">
              <v-alert
                style="
                  background-color: red;
                  margin-bottom: 0;
                "
                v-show="errorToggleLogin"
              >
                <h1
                  style="
                    position: relative;
                    padding-top: 20px;
                    color: white;
                  "
                >Oops! Something went wrong. Try Again!</h1>
              <v-btn
                style="
                  position: relative;
                  left: 260px;
                  bottom: 123px
                "
                @click="dismissError"
                >X</v-btn>
              </v-alert>
              <v-toolbar dark color="#69c99e">
                <v-toolbar-title>Login form</v-toolbar-title>
              </v-toolbar>
              <v-card-text>
                <v-form>
                  <v-text-field
                    v-model="username"
                    id="usernameLogin"
                    prepend-icon="mdi-account"
                    name="login"
                    label="Username"
                    type="text"
                  ></v-text-field>
                  <v-text-field
                    v-model="password"
                    id="passwordLogin"
                    prepend-icon="mdi-lock"
                    name="password"
                    label="Password"
                    type="password"
                  ></v-text-field>
                </v-form>
              </v-card-text>
              <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn color="red" @click="login">Login</v-btn>
                <v-btn color="#69c99e" to="/register">Register</v-btn>
              </v-card-actions>
            </v-card>
          </v-flex>
        </v-layout>
      </v-container>
    </v-main>
  </v-app>
</template>

<script>
import PostService from "@/services/PostService";

export default {
  name: "LoginForm",
  data() {
    return {
      errorToggleLogin: false,
      users: [],
      username: "",
      password: "",
    };
  },
  methods: {
    dismissError(){
      this.errorToggleLogin = false;
    },
    async login(){
      try 
      {
      let username = this.username;
      let password = this.password;
      let user = [{username: username, password: password}];
      let res = await PostService.login(username, password);
      console.log(res);
      document.getElementById('usernameLogin').value = "";
      document.getElementById('passwordLogin').value = "";
        await this.$store.dispatch('login', user);
        this.$router.push({ name: 'allposts' });
        window.location.reload();
        this.errorToggleLogin = false;
      } 
      catch{
        this.errorToggleLogin = true;
      }
    }
  },
};
</script>

<style scoped>
  #inspire{
    background-color: #E9EFC0;
  }
</style>