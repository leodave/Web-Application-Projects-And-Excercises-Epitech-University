<template>
  <v-app id="inspire">
    <v-main>
      <v-btn
        style="
          position: relative;
          top: 10px;
          right: 850px;
          font-weight: bold;
        "
        to="/"
      >Go Back
      </v-btn>
      <v-container 
        v-show="!showForm" 
        id="ageCheck"
        >
        <v-layout align-center justify-center>
          <v-flex>
            <v-card class="elevation-12">
              <v-toolbar dark color="#69c99e">
                <v-toolbar-title>Age Check</v-toolbar-title>
              </v-toolbar>
              <v-card-text> </v-card-text>
              <v-card-actions>
                <v-card-title>ARE YOU AT LEAST 13 YEARS OLD?</v-card-title>
                <v-spacer></v-spacer>
                <v-btn 
                  color="#69c99e" 
                  style="width: 100px" 
                  @click="toggleShow"
                  >YES
                </v-btn
                >
                <v-btn 
                  color="#69c99e" 
                  to="/goodbye" 
                  style="width: 100px"
                  >NO
                </v-btn>
              </v-card-actions>
            </v-card>
          </v-flex>
        </v-layout>
      </v-container>
      <v-container 
        v-show="showForm" 
        fluid 
        style="margin-top: 150px"
        >
        <v-layout align-center justify-center>
          <v-flex xs12 sm8 md4>
            <v-card class="elevation-12">
              <v-alert
                  style="
                    background-color: red;
                    margin-bottom: 0;
                    height: 140px;
                  "
                  v-show="errorToggleRegister"
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
                  @click="dismissErrorRegister"
                  >X</v-btn>
                </v-alert>
              <v-toolbar dark color="#69c99e">
                <v-toolbar-title>Registration form</v-toolbar-title>
              </v-toolbar>
              <v-card-text>
                <v-form>
                  <v-text-field
                    id="username"
                    v-model="username"
                    prepend-icon="mdi-account"
                    name="login"
                    label="Username"
                    type="text"
                  >
                  </v-text-field>
                  <v-text-field
                    id="firstName"
                    v-model="firstName"
                    prepend-icon="mdi-account"
                    name="firstName"
                    label="First Name"
                    type="text"
                  >
                  </v-text-field>
                  <v-text-field
                    id="lastName"
                    v-model="lastName"
                    prepend-icon="mdi-account"
                    name="lastName"
                    label="Last Name"
                    type="text"
                  >
                  </v-text-field>
                  <v-text-field
                    id="email"
                    v-model="email"
                    prepend-icon="mdi-email"
                    name="email"
                    label="Email"
                    type="text"
                  >
                  </v-text-field>
                  <v-text-field
                    v-model="password"
                    id="password"
                    prepend-icon="mdi-lock"
                    name="password"
                    label="Password"
                    type="password"
                  >
                  </v-text-field>
                </v-form>
              </v-card-text>
              <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn 
                  color="#69c99e" 
                  @click="register"
                  >Register
                </v-btn>
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
      errorToggleRegister: false,
      showForm: false,
      users: [],
      username: "",
      firstName: "",
      lastName: "",
      password: "",
      email: "",
    };
  },
  methods: {
    //IF AGE OLDER THAN 13 THEN SHOW THE REGISTER FORM
    toggleShow(){
      this.showForm = !this.showForm;
    },

    dismissErrorRegister(){
      this.errorToggleRegister = false;
    },

    //REGISTRATION FUNCTION
    async register() {
      //TAKES TO LOGIN VIEW AFTER REGISTRATION IS SUCCESSFULL
       try {
        var tmp = {
          username: this.username,
          first_name: this.firstName,
          last_name: this.lastName,
          name: this.firstName,
          email: this.email,
          password: this.password,
          roles: ["author"],
        };
        let res = await PostService.createUser(tmp);
        console.log(res);
        document.getElementById("username").value = "";
        document.getElementById("firstName").value = "";
        document.getElementById("lastName").value = "";
        document.getElementById("email").value = "";
        document.getElementById("password").value = "";
         this.$router.push({ name: 'HomeView' });
       } catch(error){
         this.errorToggleRegister = true;
       }
    },
  },
};
</script>

<style>
 #ageCheck{
   position: absolute;
   left: 18%;
   top: 20%;
 }
 #inspire{
   background-color: #E9EFC0;
 }
</style>