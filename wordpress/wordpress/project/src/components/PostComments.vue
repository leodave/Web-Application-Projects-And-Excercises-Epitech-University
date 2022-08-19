<template>
  <v-card style="background-color: #69c99e">
    <v-row rows="12">
      <v-col
        cols="12" 
        v-for="commentEl in comments" :key="commentEl.id"
        >
        <CommentCard style="border-radius: 0; margin-top: 10px" :post="commentEl" />
        
        <div>
          <v-btn 
            @click="toggleComment(commentEl.id)"
            >Edit
          </v-btn>
          <v-btn
            style="margin-left: 10px"
            @click="deleteComments(commentEl.id)"
            >Delete
          </v-btn>
        </div>
        
      </v-col>
    </v-row>
  </v-card>
</template>

<script>
import PostService from "@/services/PostService";
import CommentCard from "@/components/CommentCard";

export default {
  components: {
    CommentCard,
  },
  props: {
    content: String,
    post: Object,
  },
  data() {
    return {
      comments: [],
      tmpID: 0,
      editMode: false,
      newContent: "",
      showCommentById: true,
    };
  },
  methods: {
    //DELETE COMMENTS FUNCTION, SENDS A DELETE REQUEST TO THE WORDPRESS REST API
     async deleteComments(id) {
       let res = await PostService.deleteComment(id);
       console.log(res);
       window.location.reload();
     },
    //FUNCTION TO UPDATE COMMENT AND RESETS THE TEXTAREAS FOR EDITION
     async saveComment() {
       let id = this.tmpID;
       let res = await PostService.updateComment(id, {
         content: this.newContent,
         status: "publish",
       });
       this.editMode = !this.editMode;
       document.getElementById("newCommentId").value = "";
       console.log(res);
       window.location.reload();
     },
    //TOGGLES THE EDIT MODE BASED ON THE ID OF THE COMMENT
     toggleComment(id) {
       this.tmpID = id;
       this.editMode = !this.editMode;
     },
  },
  //GETS THE COMMENTS OF A POST BY THE ID OF THE POST, SENDING A GET REQUEST TO THE WORDPRESS REST API
  async created() {
    let id = this.$route.params.id;
    this.comments = await PostService.getCommentById(id);
  }
};
</script>
