<template>
  <section>
    <div v-for="(wor, i) in res" :key="i">
      <ReddyWorld :word="wor" />
    </div>
  </section>
</template>

<script>
import axios from "axios";
import ReddyWorld from "@/components/ReddyWorld.vue";

export default {
  name: "RedditView",
  components: {
    ReddyWorld,
  },

  data() {
    return {
      reddit: [],
      res: "",
    };
  },
  async created() {
    let ver = {
      headers: {
        auth: localStorage.getItem("token"),
      },
    };
    let post = await axios.get("http://localhost:3001/users/components", ver);
    let pos = post.data;
    const result = pos.filter((word) => {
      if (word.word) {
        return true;
      }
    });
    this.res = result;
    for (let i = 0; i < result.length; i++) {
      this.reddit = result[i];
    }
  },
};
</script>
