<template>
  <v-app class="grey">
    <v-row>
      <v-col v-for="item in notes" :key="item._id" cols="5">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <v-card
                height="400px"
                class="mt-10 ml-10 green white--text"
                elevation="2"
              >
                <div draggable="true">
                  <div height="200px" class="display-3 black white--text">
                    {{ item.title }}
                    <br />
                    <br />
                  </div>
                  <br />
                  <div class="green black--text display-2">
                    {{ item.content[0] }}
                    <br />
                    <br />

                    <!--<router-link :to="'/notes/' + {{item.id}}">Details</router-link>-->
                    <router-link
                      :to="{ name: 'notesdetail', params: { id: item._id } }"
                    >
                      <div class="display-1">Details</div>
                    </router-link>
                  </div>
                </div>
              </v-card>
            </div>
          </div>
        </div>
      </v-col>
    </v-row>
  </v-app>
</template>
<script>
import axios from "axios";
export default {
  name: "NotesWorld",
  props: {
    id: String,
  },
  data() {
    return {
      notes: [],
    };
  },
  async created() {
    let res = await axios.get("http://5.135.119.239:3090/notes");
    console.log(res.data.notes);
    this.notes = res.data.notes;
  },
};
</script>
<style>
.box {
  cursor: move;
}
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {
  background-color: transparent;

  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 2s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(0deg);
}

.flip-card-front,
.flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}
</style>
