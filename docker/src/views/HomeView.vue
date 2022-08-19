<template>
  <section class="grey">
    <v-card
      height="500px"
      class="purple black--text text-center display-4 font-weight-bold font-italic mb-10"
      ><br />
      <h2 class="notty">Notty</h2>
    </v-card>

    <Notes-world />
  </section>
</template>

<script>
import NotesWorld from "../components/NotesWorld";

export default {
  name: "MyHome",

  components: {
    NotesWorld,
  },
};
</script>
<style>
.notty {
  color: red;
  position: relative;
  animation: myfirst 5s linear 2s infinite alternate;
}

@keyframes myfirst {
  0% {
    color: red;
    left: -400px;
    top: 0px;
  }
  25% {
    color: yellow;
    left: -200px;
    top: 0px;
  }
  50% {
    color: blue;
    left: 0px;
  }
  75% {
    color: green;
    left: 200px;
  }
  100% {
    color: red;
    left: 400px;
    top: 0px;
  }
}
</style>
