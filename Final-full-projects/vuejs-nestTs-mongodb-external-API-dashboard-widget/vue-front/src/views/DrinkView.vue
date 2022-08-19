<template>
  <section>
    <div v-for="(dri, i) in res" :key="i">
      <DriWorld :dream="dri" />
    </div>
  </section>
</template>
<script>
import axios from "axios";
import DriWorld from "@/components/DriWorld.vue";
export default {
  name: "DrinksView",
  components: {
    DriWorld,
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
      if (word.drink) {
        return true;
      }
    });
    this.res = result;
  },
};
</script>
