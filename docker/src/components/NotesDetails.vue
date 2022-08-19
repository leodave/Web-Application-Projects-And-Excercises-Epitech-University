<template>
  <v-app class="blue">
    <v-row>
      <v-col cols="12">
        <div>
          <span v-show="!btn">
            <div v-if="note">
              <v-card
                height="500px"
                class="mt-10 ml-10 mr-10 green white--text"
                elevation="2"
              >
                <div class="display-4 text-center black white--text">
                  {{ note.title }}<br />
                </div>
                <div class="text-center black--text display-2">
                  {{ note.content[0] }}<br />
                </div>
                <v-row class="mt-10 ml-10 mr-10 mt-">
                  <v-btn color="red" elevation="2" x-large @click="deleteNote()"
                    >Delete</v-btn
                  ><v-spacer></v-spacer>
                  <v-btn color="blue" elevation="2" x-large @click="switched"
                    >Edit</v-btn
                  ><br />
                </v-row>
              </v-card>
            </div>
          </span>
          <span v-show="btn">
            <div class="green ml-10 mr-10 mt-50 display-4 col-6">
              <v-text-field
                v-model="tit"
                :counter="10"
                label="title"
              ></v-text-field>
              <v-text-field
                v-model="con"
                :counter="500"
                label="content"
              ></v-text-field>
              <v-btn color="secondary" elevation="2" x-large @click="updated()"
                >Save</v-btn
              >
            </div>
          </span>
        </div>
      </v-col>
    </v-row>
  </v-app>
</template>
<script>
import axios from "axios";
export default {
  name: "NotesDetails",
  props: ["id"],
  data() {
    return {
      tit: "",
      con: "",
      num: "",
      note: null,
      btn: false,
    };
  },
  async created() {
    let res = await axios.get(
      " http://5.135.119.239:3090/notes/" + this.$route.params.id
    );
    console.warn(res.data);
    this.note = res.data.note;
  },
  methods: {
    deleteNote() {
      axios.delete("http://5.135.119.239:3090/notes/" + this.$route.params.id);
      //this.$router.push("/notes");
      setTimeout(() => this.$router.push({ path: "/notes" }), 500);
    },
    async updated() {
      const article = {
        title: this.tit,
        content: this.con,
      };
      axios.put(
        "http://5.135.119.239:3090/notes/" + this.$route.params.id,
        article
      );
      //this.$router.push("/notes");
      setTimeout(() => this.$router.push({ path: "/notes" }), 500);
    },
    async switched() {
      this.btn = !this.btn;
    },
  },
};
</script>
