<template>

    <div class="m-auto w-2/3 mt-4">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Add Sujet</h3>
                    <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what
                        you share.</p>
                </div>
            </div>
            <div class="mt-5 md:col-span-2 md:mt-0">
                <form @submit.prevent="storeSujet">
                    <div class="shadow sm:overflow-hidden sm:rounded-md">
                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <div>

                                        <input type="text" name="identifiant" id="identifiant"

                                            placeholder="sujet identifiant .." v-model="sujet.identifiant" />
                                    </div>
                                    <div>

                                        <input type="text" name="genre" id="genre"

                                            placeholder="sujet genre .." v-model="sujet.genre" />
                                    </div>
                                    <div>

                                        <input type="date" name="date_naissance" id="date_naissance"

                                            placeholder="sujet date_naissance .." v-model="sujet.date_naissance" />
                                    </div>
                                    <div>

                                        <input type="number" name="poids" id="poids"

                                            placeholder="sujet poids .." v-model="sujet.poids" />
                                    </div>
                                    <div>

                                        <input type="text" name="note" id="note"

                                            placeholder="sujet note .." v-model="sujet.note" />
                                    </div>
                                    <div>

                                        <input type="number" name="id_parent" id="id_parent"

                                            placeholder="sujet id_parent .." v-model="sujet.id_parent" />
                                    </div>
                                </div>
                            </div>





                        </div>
                        <div >
                            <button type="submit"
                               >Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script setup>


import { reactive } from "vue";
import usePosts from "../../services/postservices";
import store from "../../store";

const { createSujet } = usePosts();


const sujet = reactive({
    "identifiant" : "",
    "genre" : "",
    "date_naissance" : "",
    "poids" : "",
    "note" : "",
    "id_parent" : ""

});

const storeSujet = async () => {

    await createSujet({ ...sujet });
    console.log({...sujet});

};

</script>
