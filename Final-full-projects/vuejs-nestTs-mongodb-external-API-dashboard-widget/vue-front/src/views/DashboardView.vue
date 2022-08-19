<template>
  <section>
    <v-row class="grey lighten-2">
      <v-col cols="8">
        <RedditView />
        <DrinkView />
      </v-col>
      <v-col cols="4">
        <ExchangeView />
        <WeatherView />
      </v-col>
    </v-row>
  </section>
</template>
<script>
import WeatherView from "@/views/WeatherView.vue";
import RedditView from "@/views/RedditView.vue";
import DrinkView from "@/views/DrinkView.vue";
import ExchangeView from "@/views/ExchangeView.vue";

export default {
  name: "DashboardView",
  components: {
    WeatherView,
    RedditView,
    ExchangeView,
    DrinkView,
  },
};
</script>
