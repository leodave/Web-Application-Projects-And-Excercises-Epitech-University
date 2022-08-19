<template>
  <section>
    <div v-for="(wea, i) in res" :key="i">
      <WeaWorld :weather="wea" />
    </div>
  </section>
</template>
<script>
import axios from "axios";
import WeaWorld from "@/components/WeaWorld.vue";
export default {
  name: "WeatherView",
  components: {
    WeaWorld,
  },

  data() {
    return {
      Weather: [],
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
      if (word.city) {
        return true;
      }
    });
    this.res = result;
  },
};
</script>
