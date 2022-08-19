<template>
    <transition
      leave-active-class="animate__animated animate__hinge"
    >
    <v-card v-if="!dropItDown">
      <v-alert
        style="
          background-color: red; 
          margin-bottom: 0;
        "
        v-show="commentErrorToggle"
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
          left: 355px;
          bottom: 62px;
        "
        @click="dismissCommentError"
        >X</v-btn>
      </v-alert>
      <v-card-title class="greenify"
      >{{ post.title.rendered }}
        </v-card-title>
      
      <v-card-text 
        class="greenify" 
        v-html="post.content.rendered" 
      >
        {{ post.content.rendered }}    
      </v-card-text>
      
      <v-card-text class="greenify">
        
        <v-text-field 
          v-model="title" 
          v-show="editMode" 
          placeholder="Title"
        >
        </v-text-field>
        
        <v-textarea 
          v-model="content" 
          filled v-show="editMode" 
          placeholder="Description">
        </v-textarea>
      
      </v-card-text>
      
      <v-card-actions class="greenify">
        
        <v-btn 
          @click="deletePost(post.id)"
          style="background-color: red"
        >Delete
        </v-btn>
        
        <v-btn 
          @click="editPost" 
          id="editPostMode" 
          style="margin-left: 10px"
        >Edit
        </v-btn>
        
        <v-btn
          :edit="editMode"
          v-show="editMode"
          @click="updatePost(post, post.id)"
          style="margin-left: 10px"
        >Save</v-btn
        >
      </v-card-actions>
    </v-card>
    </transition>
</template>

<script>
import PostService from "@/services/PostService";

export default {
  props: {
    post: Object,
  },
  
  data() {
    return {
      dropItDown: false,
      commentErrorToggle: false,
      editMode: false,
      title: "",
      content: "",
    };
  },
  
  methods: {
    dismissCommentError(){
      this.commentErrorToggle = false;
    },
    //SENDS A DELETE REQUEST WITH THE POST ID AND USER'S TOKEN AS PARAMETER TO THE WORDPRESS REST API
    async deletePost(id) {
      this.dropItDown = true;
      let token = localStorage.getItem('token');
      let res = await PostService.deletePost(token, id);
      console.log(res);
      window.location.reload();
    },
    
    //TOGGLES THE MODE OF THE EDITMODE PROPERTY, IF ITS TRUE IT WILL SHOW A TEXTAREA TO INPUT THE CONTENT OF A COMMENT AND A SAVE BUTTON
    //IF ITS FALSE IT WILL HIDE BOTH THE TEXTAREA AND THE SAVE BUTTON
    editPost() {
      this.editMode = !this.editMode;
      if(this.editMode == false){
        document.getElementById('editPostMode').innerHTML = "Edit";
      } else{
        document.getElementById('editPostMode').innerHTML = "Cancel";  
      }
      },
    
    //SENDS A POST REQUEST TO THE WORDPRESS REST API, WITH THE POST ID AND THE NEW POST'S TITLE AND DESCRIPTION, IN ORDER TO UPDATE IT. USED TO EDIT POSTS
    async updatePost(post, id) {
      var tmp = {
        title: this.title,
        content: this.content,
      };
      if(this.title !== "" && this.content !== ""){
        let token = localStorage.getItem('token');
        let res = await PostService.updatePost(token, tmp, id);
        console.log(res);
        this.editMode = false;  
        this.commentErrorToggle = false;
        window.location.reload();
      }else{
        this.commentErrorToggle = true;  
        }
      
    },
  },
  
  created() {},
};

</script>

<style></style>
