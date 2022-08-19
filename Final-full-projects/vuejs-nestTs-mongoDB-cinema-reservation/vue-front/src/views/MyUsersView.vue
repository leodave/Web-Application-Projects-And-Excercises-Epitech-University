<template>
  <section>
    <v-btn class="blue mt-15" text @click="AddUser">Add User</v-btn>
    <span v-show="!btn">
      <v-row>
        <v-col cols="4" v-for="user in users" :key="user._id">
          <v-card>
            <v-card-title>{{ user.name }}</v-card-title>
            <v-card-title>{{ user.email }}</v-card-title>
            <v-card-actions>
              <v-btn color="deep-purple" text @click="deleted(user._id)">
                Delete
              </v-btn>
              <v-btn color="deep-purple" text @click="MakeAdmin(user._id)">
                Make Admin
              </v-btn>
            </v-card-actions>
          </v-card>
        </v-col>
      </v-row>
    </span>
    <span v-show="btn">
      <RegisterUser />
    </span>
  </section>
</template>
<script>
import axios from "axios";
import RegisterUser from "@/components/RegisterUser";
export default {
  name: "MyUsersView",
  components: {
    RegisterUser,
  },

  data() {
    return {
      users: [],
      btn: false,
    };
  },
  async created() {
    let res = await axios.get("http://localhost:3000/users");
    console.log(res.data);
    this.users = res.data;
    //console.log(ver);
  },
  methods: {
    async deleted(id) {
      let res = await axios.delete("http://localhost:3000/users/" + id);
      console.log(res.data);
      window.location.reload();
    },
    async AddUser() {
      this.btn = !this.btn;
    },
    async MakeAdmin() {},
  },
};
</script>
