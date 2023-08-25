<template>
     <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Update post</h4>
                </div>
                <div class="card-body">
                    <form @submit.prevent="saveSujet">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>identifiant</label>
                                    <input type="text" class="form-control" v-model="sujet.identifiant">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Genre</label>
                                    <input type="text" class="form-control" v-model="sujet.genre">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>data de naissance</label>
                                    <input type="text" class="form-control" v-model="sujet.date_naissance">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>poids</label>
                                    <input type="text" class="form-control" v-model="sujet.poids">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Note</label>
                                    <input type="text" class="form-control" v-model="sujet.note">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>id parents</label>
                                    <input type="text" class="form-control" v-model="sujet.id_parent">
                                </div>
                            </div>
                            
                            <div class="col-12 mb-2">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import usePosts from "../../services/postservices";
import { defineProps } from "vue";

import { onMounted } from "vue";

const { getSujet, sujet, UpdateSujet } = usePosts();
const props = defineProps({
    id: Number
})
onMounted(async () => {
    await getSujet(props.id)
    return post
    console.log(sujet.value)
});

const saveSujet = async () => {
    await UpdateSujet(props.id);

};
</script>