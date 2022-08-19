<template>
  <v-card>
    <v-alert
      style="background-color: red"
      v-show="errorToggle"
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
        left: 530px;
        bottom: 60px
      "
      @click="dismissError"
      >X</v-btn>
    </v-alert>
    <v-card-title> Create your Post </v-card-title>
    <v-card-text>
      <v-text-field 
        v-model="title" 
        label="Title"
      >
      </v-text-field>
      <v-textarea 
        filled 
        v-model="content" 
        label="Content"
      >
      </v-textarea>
    </v-card-text>
    <v-row align="center">
      <v-col 
        style="
          margin-left: 15px;" 
          data-app 
          class="d-flex" 
          cols="12" 
          sm="6"
      >
        <v-select 
          :items="items" 
          v-model="tmpItem" 
          label="Category" 
          solo
        >
        </v-select>
      </v-col>
    </v-row>
    <v-card-actions 
      style="
        margin-left: 8px; 
        margin-bottom: 8px
        "
    >
      <v-btn @click="submit">Submit</v-btn>    
    </v-card-actions>
  </v-card>
</template>

<script>
import PostService from "@/services/PostService";

export default {
  data() {
    return {
      errorToggle: false,
      items: ["Movies", "Books", "Series", "Sports", "Video Games"],
      tmpItem: "",
      title: "",
      content: "",
    };
  },
  methods: {
    dismissError(){
      this.errorToggle = false;
    },
    //REFERING TO SERVICES/POSTSERVICE.JS THE SUBMIT FUNCTION SENDS A POST REQUEST TO THE WORDPRESS REST API, 
    //TAKING THE INPUT OF THE CREATE YOUR POST FORM AND USING THE USER'S TOKEN
    //TO GENERATE A TITLE, DESCRIPTION AND ASSOCIATE THE POST TO A CATEGORY.
    async submit() {
      let tmpItemId = 0;
      if (this.tmpItem == "Books") {
        tmpItemId = 5;
      } else if (this.tmpItem == "Movies") {
        tmpItemId = 4;
      } else if (this.tmpItem == "Series") {
        tmpItemId = 7;
      } else if (this.tmpItem == "Sports") {
        tmpItemId = 3;
      } else if (this.tmpItem == "Video Games") {
        tmpItemId = 6;
      }
      try
      {
        let token = localStorage.getItem('token');
        let res = await PostService.createPost(token, {
          title: this.title,
          content: this.content,
          categories: tmpItemId,
          status: "publish",
        });
        console.log(res);
        window.location.reload();
      }
      catch
      {
        this.errorToggle = true;
      }
      
    },
  },
};
</script>
<style>
  .greenify{
    background-color: #69c99e;
  }
</style>
