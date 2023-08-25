import "./bootstrap";




import { createApp } from "vue";
import router from "./router";
import Login from "./components/auth/login.vue";
import Register from "./components/auth/register.vue";

 import List from "./components/sujet/List.vue";
import Add from "./components/sujet/add.vue";
 import Edit from "./components/sujet/Edit.vue";
import Welcome from "./components/Welcome.vue";

createApp({
    components: {
        Welcome,
        Login,
        Register,
        Add,
         List,
          Edit,
    },
})
    .use(router)
    .mount("#app");

