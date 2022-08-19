<template>
  <section>
    <div v-for="(dri, i) in res" :key="i">
      <ExchaWorld :exchange="dri" />
    </div>
  </section>
</template>
<script>
import axios from "axios";
import ExchaWorld from "@/components/ExchaWorld.vue";
export default {
  name: "ExchangeView",
  components: {
    ExchaWorld,
  },

  data() {
    return {
      res: [],
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
      if ((word.from, word.to, word.amount)) {
        return true;
      }
    });
    this.res = result;
  },
};
</script>
