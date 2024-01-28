import { createApp } from "vue";
import "./bootstrap";
import UsersLists from "./components/users/UsersList.vue";

const app = createApp({});


app.component("usersList", UsersLists);
app.mount("#app");
