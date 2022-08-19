<template>
  <div class="home grey lighten-2">
    <v-row class="">
      <v-col cols="5">
        <ExchangeWorld />
      </v-col>
      <v-col cols="1"></v-col>
      <v-col cols="5">
        <HelloWorld />
      </v-col>
    </v-row>
    <v-row>
      <v-col cols="5">
        <AboutWorld />
      </v-col>
      <v-col cols="1"></v-col>
      <v-col cols="5">
        <RedditWorld />
      </v-col>
    </v-row>
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from "@/components/HelloWorld.vue";
import RedditWorld from "@/components/RedditWorld.vue";
import ExchangeWorld from "@/components/ExchangeWorld.vue";
import AboutWorld from "@/components/AboutWorld.vue";

export default {
  name: "HomeView",
  components: {
    HelloWorld,
    RedditWorld,
    ExchangeWorld,
    AboutWorld,
  },
};
</script>
