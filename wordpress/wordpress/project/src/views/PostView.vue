<template>
  <div class="about">
    <v-btn
      style="
        position: relative;
        top: 10px;
        right: 850px;
        font-weight: bold;
      "
      to="/allposts"
    >Go Back
    </v-btn>
    <v-row 
      rows="12" 
      style="padding: 25px
      "
      >
      <v-col>
        <v-row rows="6">
          <v-col>
            <v-card 
              style="
                background-color: #69c99e;
                border: 1px solid gray
                "
                >
              <v-card-title
                style="
                  justify-content: center;
                  font-size: 30px;
                  font-weight: bold;
                "
                >{{ posts.title.rendered }}</v-card-title
              >
              <v-card-text
                v-html="posts.content.rendered"
                style="
                  margin-top: 30px; 
                  text-align: start
                  "
              >{{ posts.content.rendered }}
              </v-card-text>
              <v-card-text
                >
                
                <v-alert
                style="background-color: red"
                v-show="commentEditError"
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
                    left: 830px;
                    bottom: 50px
                  "
                  @click="dismissCommentEditError"
                >X
                </v-btn>
              </v-alert>

              <v-textarea
                id="createComment"
                v-model="content"
                filled
                v-show="addCommentBoolean"
                label="Add Comment"
              ></v-textarea>
              <v-card-actions>
                <v-btn
                  @click="showComment" 
                  id="showCommentBtn"
                  >Add Comment
                </v-btn>
                <v-btn
                  v-show="addCommentBoolean"
                  @click="addComment(posts.id, content)" 
                  style="margin-left: 10px"
                  >Save Comment
                </v-btn>
              </v-card-actions>
              <PostComments :comments="comments" :key="counter" style="margin-top: 20px"/>
              </v-card-text>
            </v-card>
          </v-col>
        </v-row>
      </v-col>
    </v-row>
  </div>
</template>

<script>
import PostComments from "@/components/PostComments.vue";
import PostService from "@/services/PostService";

export default {
  props: { comments: Object },
  components: {
    PostComments,
  },
  data() {
    return {
      commentEditError: false,
      addCommentBoolean: false,
      posts: { title: "", content: "", id: -1 },
      content: "",
      counter: 0,
    };
  },
  methods: {

    dismissCommentEditError(){
      this.commentEditError = false;
    },
    //CREATES A COMMENT AND SUMS THE COUNTER TO AUTO REFRESH THE PAGE
    async addComment(id, content) {
      try
      {
        let token = localStorage.getItem("token")
        let res = await PostService.createComment(token, {
          post: id,
          content: content,
        });
        console.log(res);
        this.counter++;
        this.addCommentBoolean = !this.addCommentBoolean;
        document.getElementById("createComment").value = "";
        document.getElementById("showCommentBtn").innerHTML = "AddComment"
        window.location.reload();
      }
      catch
      {
        this.commentEditError = true;
        this.counter++
      }
    },
    //TOGGLES THE EDIT MODE TO SHOW THE TEXTFIELDS AND CHANGES THE INNER HTML DEPENDING ON THE STATE
    showComment() {
      this.addCommentBoolean = !this.addCommentBoolean;
      if(this.addCommentBoolean == true){
        document.getElementById("showCommentBtn").innerHTML = "Cancel"
      }else{
        document.getElementById("showCommentBtn").innerHTML = "Add Comment"
      }
    },
  },
  
  async created() {
    this.posts = await PostService.getPostById(this.$route.params.id);
  },
};
</script>

<style scoped>
  #goBackBtn{
    position:relative;
    float: left;
    margin-left: 30px;
  }
  #postDetailsTitle{
    position:absolute;
    left: 45%;
  }

  .about{
    background-color: #E9EFC0;
  }
</style>