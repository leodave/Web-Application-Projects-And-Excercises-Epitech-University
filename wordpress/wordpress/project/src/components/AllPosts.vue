<!--
  ALLPOSTS.VUE SHOWS THE TITLE AND DESCRIPTION OF A POST, AND REFERS YOU TO THE POSTVIEW 
  WHERE YOU CAN SEE THE DETAILS OF THE POST AND COMMENT THE POST.

  IN ORDER FOR THIS TO WORK THE ROUTER MUST SEND THE POST.ID AS PARAMETER TO DISPLAY THE INFORMATION OF THE POST CLICKED IN THE ALLPOSTSVIEW.
-->

<template>
  <router-link
    :to="{ name: 'post', params: { id: post.id } }"
    style="text-decoration: none"
  >
    <v-card id="allPostsCard">
      <div>
        <v-card-title
         id="titleAllPostsView"
          >{{ post.title.rendered }}
        </v-card-title>
        <v-card id="contentAllPostsView">
          <v-card-text
           v-html="post.content.rendered" 
           style="margin-left: 20px"
           >{{ post.content.rendered }}
          </v-card-text>
        </v-card>
      </div>
    </v-card>
  </router-link>
</template>

<script>
export default {
  props: {
    post: Object,
  },
  data() {
    return {};
  },
  created() {},
};
</script>

<style scoped>

#allPostsCard {
  margin-top: 10px;
  border: 0.5px solid gray;
}

#titleAllPostsView{
  background-color: #69c99e;
  justify-content: center; 
  font-size: 25px; 
  font-weight: 600; 
  height: 100px;

}

#contentAllPostsView{
  background-color: #69c99e; 
  text-align: start; 
  height: 100px; 
  white-space: nowrap; 
  overflow: hidden; 
  text-overflow: ellipsis;
}
</style>
