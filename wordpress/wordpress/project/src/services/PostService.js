import axios from "axios";

const baseUrl = "http://localhost:8000/wp-json/wp/v2/";

export default class PostService {
  //USERS SECTION
  static async getUsers() {
    let res = await axios.get(baseUrl + "users", {
      headers: {
        'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMCIsImlhdCI6MTY1MjcxMzk1NywibmJmIjoxNjUyNzEzOTU3LCJleHAiOjE2NTMzMTg3NTcsImRhdGEiOnsidXNlciI6eyJpZCI6IjEifX19.qbl4nOV6h8SIXQo-IMJpIdgDFf9z1-lPcFLzymacL-8`
      },
    });
    return res.data;
  }
  static async createUser(user) {//AXIOS DEFAULT HEADERS COMMON TO ?HIDE TOKEN
    let res = await axios.post(baseUrl + "users", user, {
      headers: {
          'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMCIsImlhdCI6MTY1MjcxMzk1NywibmJmIjoxNjUyNzEzOTU3LCJleHAiOjE2NTMzMTg3NTcsImRhdGEiOnsidXNlciI6eyJpZCI6IjEifX19.qbl4nOV6h8SIXQo-IMJpIdgDFf9z1-lPcFLzymacL-8`
        },
    });
    return res.data;
  }

   static async login(username, password) {
     let res = await axios.post("http://localhost:8000/wp-json/jwt-auth/v1/token?username=" + username + "&password=" + password);
     console.log(res);
  }

  //POSTS SECTION
  static async getPosts() {
    let res = await axios.get(baseUrl + "posts?per_page=99");
    return res.data;
  }

  //SHOWS POSTS BY AUTHOR ID, FOR USER MANAGEMENT
  static async getPostsById() {
    let resUsers = await PostService.getUsers();
    let authorId = 0;
    let loggedInUserName = localStorage.getItem("displayName"); 
    for( let i=0; i<resUsers.length;i++){
      if(resUsers[i].name == loggedInUserName ){
        authorId = resUsers[i].id;
      }
    }

    let res = await axios.get(baseUrl + "posts?author=" + authorId);
    return res.data;
  }

  //SHOWS EDIT AND DELETE BTNS FOR COMMENTS THAT HAVE THE SAME AUTHOR ID AS THE LOGGED IN USER, FOR USER MANAGEMENT
  static async getCommentsById(token) {
    let resUsers = await PostService.getComments();
    let authorId = 0;
    let loggedInUserName = localStorage.getItem("displayName"); 
    for( let i=0; i<resUsers.length;i++){
      if(resUsers[i].name == loggedInUserName ){
        authorId = resUsers[i].id;
      }
    }
    let res = await axios.get(baseUrl + "comments?author=" + authorId, {
      headers: {
        'Authorization': `Bearer ${token}`
      }
    });
    return res.data;
  }

  static async createPost(token, post) {
    let res = await axios.post(baseUrl + "posts", post, {
      headers: {
        'Authorization': `Bearer ${token}`
      },
    });
    return res.data;
  }

  static async updatePost(token, post, id) {
    let res = await axios.post(baseUrl + "posts/" + id, post, {
      headers: {
        'Authorization': `Bearer ${token}`
      },
    });
    return res.data;
  }

  static async deletePost(token, id) {
    let res = await axios.delete(baseUrl + "posts/" + id, {
      headers: {
        'Authorization': `Bearer ${token}`
      },
    });
    return res.data;
  }

  //GET REQUEST FOR POSTVIEW TO SHOW 1 POST IN DETAIL
  static async getPostById(id) {
    let res = await axios.get(baseUrl + "posts/" + id);
    console.log(id);
    return res.data;
  }
  static async getPostsByCat(id) {
    let res = await axios.get(baseUrl + "posts?categories=" + id);
    return res.data;
  }
  //COMMENTS SECTION
  //POSTS SECTION
  static async getComments() {
    let res = await axios.get(baseUrl + "comments");
    return res.data;
  }

  static async createComment(token, post) {
    let res = await axios.post(baseUrl + "comments", post, {
      headers: {
        'Authorization': `Bearer ${token}`
      },
    });
    return res.data;
  }

  static async updateComment(id, comment) {
    let res = await axios.put(baseUrl + "comments/" + id, comment, {
      headers: {
        'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMCIsImlhdCI6MTY1MjcxMzk1NywibmJmIjoxNjUyNzEzOTU3LCJleHAiOjE2NTMzMTg3NTcsImRhdGEiOnsidXNlciI6eyJpZCI6IjEifX19.qbl4nOV6h8SIXQo-IMJpIdgDFf9z1-lPcFLzymacL-8`
      },
    });
    return res.data;
  }

  static async deleteComment(id) {
    let res = await axios.delete(baseUrl + "comments/" + id, {
      headers: {
        'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMCIsImlhdCI6MTY1MjcxMzk1NywibmJmIjoxNjUyNzEzOTU3LCJleHAiOjE2NTMzMTg3NTcsImRhdGEiOnsidXNlciI6eyJpZCI6IjEifX19.qbl4nOV6h8SIXQo-IMJpIdgDFf9z1-lPcFLzymacL-8`
      },
    });
    return res.data;
  }

  static async getCommentById(id) {
    let res = await axios.get(baseUrl + "comments/?post=" + id);
    return res.data;
  }
}
