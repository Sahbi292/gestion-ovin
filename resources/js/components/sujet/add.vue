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
            <label for="matricule">Matricule:</label>
            <input type="text" id="matricule" v-model="nouvelAnimal.matricule" required>

            <label for="genre">Genre:</label>
            <input type="text" id="genre" v-model="nouvelAnimal.genre" required>

            <label for="dateNaissance">Date de Naissance:</label>
            <input type="date" id="dateNaissance" v-model="nouvelAnimal.dateNaissance" required>

            <label for="race">Race:</label>
            <input type="text" id="race" v-model="nouvelAnimal.race" required>

            <label for="poids">Poids:</label>
            <input type="text" id="poids" v-model="nouvelAnimal.poids" required>

            <label for="note">Note:</label>
            <textarea id="note" v-model="nouvelAnimal.note"></textarea>

            <label for="lotId">Lot ID:</label>
            <input type="number" id="lotId" v-model="nouvelAnimal.lotId" required>

            <label for="matriculeParent">Matricule Parent:</label>
            <input type="text" id="matriculeParent" v-model="nouvelAnimal.matriculeParent">

            <button type="submit">Ajouter</button>
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
    "matricule" : "",
    "genre" : "",
    "date_naissance" : "",
    "race" : "",
    "poids" : "",
    "note" : "",
    "matricule_parent" : ""

});

const storeSujet = async () => {

    await createSujet({ ...sujet });
    console.log({...sujet});

};

</script>
