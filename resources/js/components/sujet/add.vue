<template>
  <div class="container">
    <b-container fluid>

      <!-- navbar-1.vue -->
      <navbar/>

      <!-- jumbotron -->
      <b-jumbotron header="Add New Sujet"></b-jumbotron>
      <!-- Add New Sujet Form  -->
      <b-form @submit="onSubmit">
        <!-- Product Name -->
        <b-row class="my-1">
          <b-col sm="3">
            <label>identifiant:</label>
          </b-col>
          <b-col sm="9">
            <b-form-input type="text" v-model="sujet.identifiant" required placeholder="identifiant"></b-form-input>
          </b-col>
        </b-row>

        <!-- Product Description -->
        <b-row class="my-1">
          <b-col sm="3">
            <label>genre:</label>
          </b-col>
          <b-col sm="9">
            <b-form-input type="text" v-model="sujet.genre" required placeholder="Product Description"></b-form-input>
          </b-col>
        </b-row>

       

        <!-- Action Buttons -->
        <b-row class="my-1">
          <b-col sm="9">
          </b-col>
          <b-col sm="3">
            <b-button type="submit" variant="primary">Submit</b-button>
            <b-button type="reset" variant="secondary" v-on:click="cancel">Reset</b-button>
          </b-col>
        </b-row>
      </b-form>
    </b-container>
  </div>
</template>
<script setup>


import { reactive } from "vue";
import usePosts from "../../services/postservices";
const { ost } = usePosts();


const post = reactive({
    identifiant: "",
    genre: "",

});

const storePost = async () => {
    await ost({ ...post });
};

</script>

<style>
.container {
  width: 80%;
}
</style>