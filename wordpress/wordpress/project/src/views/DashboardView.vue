<template>
  <div>
    <v-container>
      <v-row>
        <v-col cols="12">
          <AddPost style="margin-top: 10px; border: 1px solid gray; background-color: #69c99e" />
        </v-col>
        <v-col
          cols="12"
          v-for="postEl in posts"
          :key="postEl.id"
          style="
            padding: 0 50px 0 50px; 
            margin-top: 22px
          "
        >
          <PostCard :post="postEl" style="border: 1px solid gray; margin-bottom: 10px;"/>
        </v-col>
      </v-row>
    </v-container>
  </div>
</template>

<script>
import PostCard from "@/components/PostCard.vue";
import PostService from "@/services/PostService";
import AddPost from "@/components/AddPost.vue";

export default {
  components: {
    PostCard,
    AddPost,
  },
  data() {
    return {
      posts: [],
      componentKey: 0,
    };
  },
  methods: {},
  async created() {
    this.posts = await PostService.getPostsById();
  },
};
</script>
