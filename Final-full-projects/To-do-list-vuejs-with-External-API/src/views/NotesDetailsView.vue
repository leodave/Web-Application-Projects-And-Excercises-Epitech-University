<template><NotesDetails /></template>
<script>
// @ is an alias to /src
import NotesDetails from "@/components/NotesDetails.vue";

export default {
  name: "NotesDetailsView",
  props: ["id"],
  components: {
    NotesDetails,
  },
};
</script>
