<template>
  <section>
    <v-card class="mx-auto mt-15" max-width="400" elevation="10">
      <template v-if="money">
        <v-row>
          <v-col cols="12">
            <v-text-field
              :label="'From---->' + money.from"
              required
            ></v-text-field>
            <v-text-field :label="'To---->' + money.to" required></v-text-field>
            <v-text-field
              :label="'Amount---->' + money.amount"
              required
            ></v-text-field>
            <v-list-item two-line>
              <v-list-item-content>
                <v-list-item-title class="text-h10">
                  <h3>{{ money.conversion }} {{ money.to }}</h3>
                </v-list-item-title>
                <v-list-item-subtitle>
                  <h4>{{ money.rate }}x</h4>
                </v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
            <v-btn color="blue" @click="deletedExchange(exchange)">
              Delete
            </v-btn>
          </v-col>
        </v-row>
      </template>
    </v-card>
  </section>
</template>
<script>
import axios from "axios";
export default {
  name: "ExchaWorld",
  props: {
    exchange: { Object },
  },

  data() {
    return {
      money: [],
    };
  },
  async created() {
    let res = await axios.get(
      "http://localhost:3001/exchange/" +
        this.exchange.from +
        "/" +
        this.exchange.to +
        "/" +
        this.exchange.amount
    );

    this.money = res.data;
  },
  methods: {
    async deletedExchange(dri) {
      console.log(dri);
      let ver = {
        headers: {
          auth: localStorage.getItem("token"),
        },
      };
      axios.get(
        "http://localhost:3001/users/removeExchange/" +
          dri.amount +
          "/" +
          dri.from +
          "/" +
          dri.to,
        ver
      );
      location.reload();
    },
  },
};
</script>
