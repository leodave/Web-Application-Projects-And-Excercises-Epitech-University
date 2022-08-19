<template>
  <v-container>
    <v-card elevation="10">
      <v-row>
        <v-col cols="12" v-if="place" class="pl-10">
          <v-col v-if="weather">
            <v-col v-if="condition">
              <v-form>
                <v-row>
                  <v-col cols="12">
                    <v-text-field
                      v-model="city"
                      label="city"
                      required
                    ></v-text-field>
                    <v-btn elevation="2" color="blue" @click="find(city)">
                      Find
                    </v-btn>
                  </v-col>
                </v-row>
              </v-form>

              <v-card class="mx-auto grey lighten-2" max-width="600">
                <v-list-item two-line>
                  <v-list-item-content>
                    <v-list-item-title class="text-h10">
                      <h3>{{ place.name }}</h3>
                    </v-list-item-title>
                    <v-list-item-subtitle>
                      <h4>{{ place.country }}</h4>
                    </v-list-item-subtitle>
                    <v-list-item-subtitle>
                      <h3 class="blue">{{ place.localtime }}</h3>
                    </v-list-item-subtitle>
                  </v-list-item-content>
                </v-list-item>

                <v-card-text>
                  <v-row align="center">
                    <v-col class="text-h2" cols="3">
                      <h4>{{ weather.temp_c }}&deg;C</h4>
                    </v-col>
                    <v-col class="text-h2" cols="3">
                      <h6>{{ weather.temp_f }}&deg;F</h6>
                    </v-col>
                    <v-col cols="6">
                      <v-img
                        :src="condition.icon"
                        alt="Sunny image"
                        width="150"
                      ></v-img>
                    </v-col>
                  </v-row>
                </v-card-text>

                <v-list-item>
                  <v-list-item-subtitle>
                    <h3 class="blue">{{ condition.text }}</h3>
                  </v-list-item-subtitle>
                </v-list-item>
              </v-card>
            </v-col>
          </v-col>
        </v-col>
      </v-row>
    </v-card>
  </v-container>
</template>

<script>
import axios from "axios";
export default {
  name: "HelloWorld",

  data() {
    return {
      weather: [],
      place: [],
      condition: [],
      city: "",
    };
  },

  methods: {
    async find(city) {
      let ver = {
        headers: {
          auth: localStorage.getItem("token"),
        },
      };

      let res = await axios.get("http://localhost:3001/weather/" + city);

      this.place = res.data.location;
      this.weather = res.data.current;
      this.condition = res.data.current.condition;

      await axios.post(
        "http://localhost:3001/users/components",
        {
          component: {
            city: city,
          },
        },

        ver
      );
    },
  },
};
</script>
