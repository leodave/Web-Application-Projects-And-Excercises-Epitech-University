<template>
  <div>
    <v-row>
      <v-col cols="1">
      </v-col>
      <v-col cols="6">
        <div
          v-for="postEl in posts"
          :key="postEl.id"
          style="
            padding: 0 50px 0 50px; 
            margin-top: 40px; 
            margin-bottom: 10px
          "
        >
          <AllPosts style="background-color: lightgray;" :post="postEl" /></div
      >
      </v-col>
      <v-col cols="1"></v-col>
      <v-col cols="3">
        <div
          style="
            width: 350px;
            height: 845px;
            background-color: white;
            margin-top: 40px;
            border: 1px solid gray;
          "
        >
        <v-card 
          class="mx-auto"
          max-width="349" 
          max-height="200"
          >
            <v-list style="padding:0">
              <v-list-item-group 
                v-model="model" 
                style="padding:0"
              >
                <div style="padding:0">
                  <v-list-item
                    style="
                      justify-content: center; 
                      padding:0;
                    "
                    @click="filterByCat(-1)"
                    >
                      <img src="../../public/banners/allposts.jpg" style="width: 400px">
                  </v-list-item>
                </div>
                <v-list-item
                  v-for="(item, i) in items"
                  :key="i"
                  @click="filterByCat(i)"
                  style="padding:0"
                >
                  <v-list-item-content style="padding:0">
                    <v-img :src="item.url"></v-img>
                  </v-list-item-content>
                </v-list-item>
              </v-list-item-group>
            </v-list>
          </v-card>
        </div>
      </v-col>
      <v-col cols="1"></v-col>
    </v-row>
  </div>
</template>

<script>
import AllPosts from "@/components/AllPosts.vue";
import PostService from "@/services/PostService";

export default {
  components: {
    AllPosts,
  },
  data() {
    return {
      //FOR CATEGORIZING
      items: [
        {
          url: "banners/sports.jpg",
          text: "Sports",
        },
        {
          url: "banners/movies.jpg",
          text: "Movies",
        },
        {
          url: "banners/series.jpg",
          text: "Series",
        },
        {
          url: "banners/videogames.jpg",
          text: "Video Games",
        },
        {
          url: "banners/books.jpg",
          text: "Books",
        },
      ],
      model: null,
      posts: [],
      componentKey: 0,
    };
  },
  methods: {
    async filterByCat(i) {
      //THIS GETS POSTS FROM THE API BASED ON THE ID OF THE CATEGORY, THAT WE BIND TO THE "ID" OF THE BUTTON PRESSED
      let catId = 0;
      if (i == 0) {
        catId = 3;
        this.posts = await PostService.getPostsByCat(catId);
      }
      if (i == 1) {
        catId = 4;
        this.posts = await PostService.getPostsByCat(catId);
      }
      if (i == 2) {
        catId = 7;
        this.posts = await PostService.getPostsByCat(catId);
      }
      if (i == 3) {
        catId = 6;
        this.posts = await PostService.getPostsByCat(catId);
      }
      if (i == 4) {
        catId = 5;
        this.posts = await PostService.getPostsByCat(catId);
      }
      if (i == -1) {
        this.posts = await PostService.getPosts();
      }
    },
  },
  //SENDS A GET REQUESTS OF ALL POSTS FROM THE WORDPRESS REST API
  async created() {
    this.posts = await PostService.getPosts();
  },
};
</script>

<style>
</style>
