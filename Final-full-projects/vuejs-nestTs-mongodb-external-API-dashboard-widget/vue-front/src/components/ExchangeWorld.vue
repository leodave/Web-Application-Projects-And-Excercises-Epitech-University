<template>
  <v-container>
    <v-card elevation="10">
      <v-row>
        <v-col cols="12" class="pl-15">
          <v-form>
            <v-text-field v-model="from" label="from" required></v-text-field>
            <v-text-field v-model="to" label="to" required></v-text-field>
            <v-text-field
              v-model="amount"
              label="amount"
              required
            ></v-text-field>
            <v-btn
              elevation="2"
              color="blue"
              @click="convert(from, to, amount)"
            >
              convert
            </v-btn>
          </v-form>
        </v-col>
      </v-row>

      <v-row>
        <v-col cols="12" v-if="exchange">
          <v-card class="mx-auto grey lighten-2" max-width="400">
            <v-list-item two-line>
              <v-list-item-content>
                <v-list-item-title class="text-h10">
                  <h3>{{ exchange.conversion }} {{ exchange.to }}</h3>
                </v-list-item-title>
                <v-list-item-subtitle>
                  <h4>{{ exchange.rate }}x</h4>
                </v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
          </v-card>
        </v-col>
      </v-row>
    </v-card>
  </v-container>
</template>
<script>
import axios from "axios";
export default {
  name: "ExchangeWorld",

  data() {
    return {
      exchange: [],
      from: "",
      to: "",
      amount: "",
    };
  },

  methods: {
    async convert(from, to, amount) {
      let ver = {
        headers: {
          auth: localStorage.getItem("token"),
        },
      };
      let res = await axios.get(
        "http://localhost:3001/exchange/" + from + "/" + to + "/" + amount
      );

      this.exchange = res.data;

      await axios.post(
        "http://localhost:3001/users/components",
        {
          component: {
            from: from,
            to: to,
            amount: amount,
          },
        },

        ver
      );
    },
  },
};
</script>
