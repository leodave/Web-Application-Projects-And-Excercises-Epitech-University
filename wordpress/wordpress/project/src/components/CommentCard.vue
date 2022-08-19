<!--
THIS VIEW DISPLAYS A SINGLE COMMENT
USELESS COMPONENT, INTEGRATE TO PARENT TO SIMPLIFY THE APPLICATION
-->

<template>
  <v-card 
    style="
      background-color: #E9EFC0;
      text-align: start
      "
    >
    <v-card-text 
      v-html="post.content.rendered" 
      style="
        margin-left: 20px
        "
      >{{ post.content.rendered }}
    </v-card-text>
  </v-card>
</template>

<script>
export default {
  props: {
    post: Object,
    editMode: Boolean,
    newContent: String,
  },
  data() {
    return {};
  },
  methods: {},
};
</script>

<style>
.v-sheet.v-card:not(.v-sheet--outlined) {
  box-shadow: none;
  border-radius: 0;
}
</style>
