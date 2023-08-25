import axios from "axios";
import { ref } from "vue";
import router from "../router";
import store from "../store";

export default function usePosts() {
    const sujets = ref([]);
    const sujet = ref([]);
    const errors = ref("");

    const getSujets = async () => {
        let response = await axios.get("/api/list");
        console.log('hereeeeeeeeeeeeeeeeee');
        console.log({response});
        sujets.value = response.data.sujets;
    };

    const createSujet = async (data) => {
        try {
            await axios.post("/api/sujet", data);
            await router.push({ name: "home" });
        } catch (e) {
            if (e.response.status === 422) {
                errors.value = e.response.data.errors;
            }
        }
    };

    const destroySujet = async (id) => {
        if (!window.confirm("Are u sure !")) return;
        await axios.delete("/api/sujet/" + id);
        await getSujets();
    };
    const getSujet = async () => {
        let response = await axios.get("/api/sujet/" );
        sujet.value = response.data.data;
        console.log("edit sujet", sujet.value);
    };

    const UpdateSujet = async (id) => {
        errors.value = "";
        try {
            await axios.put("/api/sujet/" + id, sujet.value);
            await router.push({ name: "sujetList" });
        } catch (e) {
            if (e.response.status === 422) {
                errors.value = e.response.data.errors;
                console.log(e.response.data.errors);
            }
        }
    };

    const signin = async (data) => {
        axios
            .post("api/login", data)

            .then((res) => {
                console.log({ res });
                store.state.user.token = res.data.token;
                if (res.data) {
                    localStorage.setItem("user", JSON.stringify(res.data));
                }
                router.push({ name: "home" });
                console.log(store.state.user.token);
            })
            .catch((e) => {
                if (e.response.status === 422) {
                    errors.value = e.response.data.errors;
                    console.log(e.response.data.errors);
                }
            });
    };
    const signup = async (data) => {
        axios
            .post("api/register", data)
            .then((res) => {
                store.state.user.token = res.data.token;
                router.push({ name: "sujetList" });

                console.log(store.state.user.token);
            })
            .catch((e) => {
                if (e.response.status === 422) {
                    errors.value = e.response.data.errors;
                    console.log(e.response.data.errors);
                }
            });
    };

    //Logout user
    const logout = () => {
        store.state.user = null;
        localStorage.removeItem("user");
        router.push({ name: "home" });
    };

    return {
        sujets,
        sujet,
        getSujets,
        createSujet,
        destroySujet,
        getSujet,
        UpdateSujet,
        signin,
        signup,
        logout,
    };
}
