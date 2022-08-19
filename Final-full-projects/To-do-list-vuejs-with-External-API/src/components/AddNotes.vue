<template>
  <v-app class="green">
    <v-container>
      <v-row>
        <v-col cols="7">
          <v-text-field
            v-model="tit"
            :counter="10"
            label="title"
            required
          ></v-text-field>
          <v-text-field
            v-model="con"
            :counter="500"
            label="content"
            required
          ></v-text-field>
          <v-btn color="secondary" elevation="2" x-large @click="save()"
            >Save</v-btn
          >
        </v-col>
      </v-row>
    </v-container>
  </v-app>
</template>

<script>
import axios from "axios";
export default {
  name: "AddNotes",
  data() {
    return {
      tit: "",
      con: "",

      notes: [],
    };
  },
  methods: {
    async save() {
      let res = await axios.post("http://5.135.119.239:3090/notes ", {
        title: this.tit,
        content: this.con,
      });
      console.log(res);
      this.notes.push({
        title: this.tit,
        content: this.con,
      });
      //this.$router.push("/notes");
      setTimeout(() => this.$router.push({ path: "/notes" }), 500);
    },
  },
};
</script>
