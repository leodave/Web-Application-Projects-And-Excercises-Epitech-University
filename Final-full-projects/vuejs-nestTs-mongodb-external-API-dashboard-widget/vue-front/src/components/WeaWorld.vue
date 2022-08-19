<template>
  <section>
    <v-card class="ml-5 mt-15" elevation="10" max-width="500">
      <v-list-item two-line>
        <v-list-item-content v-if="place">
          <v-list-item-title class="text-h10">
            <h3>{{ place.name }}</h3>
          </v-list-item-title>
          <v-list-item-subtitle>
            <h4>{{ place.country }}</h4>
          </v-list-item-subtitle>
          <v-list-item-subtitle>
            <h3 class="white blue--text">{{ place.localtime }}</h3>
          </v-list-item-subtitle>
        </v-list-item-content>
      </v-list-item>
      <div v-if="code">
        <v-card-text v-if="condition">
          <v-row align="center">
            <v-col class="text-h2" cols="3">
              <h4>{{ condition.temp_c }}&deg;C</h4>
            </v-col>
            <v-col class="text-h2" cols="3">
              <h6>{{ condition.temp_f }}&deg;F</h6>
            </v-col>
            <v-col cols="6">
              <v-img :src="code.icon" alt="Sunny image" width="150"></v-img>
            </v-col>
          </v-row>
        </v-card-text>

        <v-list-item>
          <v-list-item-subtitle>
            <h3 class="white blue--text">{{ code.text }}</h3>
          </v-list-item-subtitle>
        </v-list-item>
      </div>
      <v-btn color="blue" @click="deletedweather(weather)">Delete</v-btn>
    </v-card>
  </section>
</template>
<script>
import axios from "axios";
export default {
  name: "WeaWorld",
  props: {
    weather: { Object },
  },

  data() {
    return {
      place: [],
      condition: [],
      code: [],
    };
  },
  async created() {
    let res = await axios.get(
      "http://localhost:3001/weather/" + this.weather.city
    );
    this.place = res.data.location;
    this.condition = res.data.current;
    this.code = res.data.current.condition;
  },
  methods: {
    async deletedweather(wea) {
      console.log(wea);
      let ver = {
        headers: {
          auth: localStorage.getItem("token"),
        },
      };
      axios.get("http://localhost:3001/users/removeweather/" + wea.city, ver);
      location.reload();
    },
  },
};
</script>
