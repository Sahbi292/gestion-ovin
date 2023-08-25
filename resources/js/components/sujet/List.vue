<!-- <template>
    <Navbar />
    <div class="row">
        <div class="col-12 mb-2 text-end">
            <router-link :to='{ name: "sujetAdd" }' class="btn btn-primary">Create</router-link>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Post</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>identifiant</th>
                                    <th>genre</th>
                                    <th>date_naissance</th>
                                    <th>poids</th>
                                     <th>note</th>
                                      <th>id_parent</th>
                                </tr>
                            </thead>
                            <tbody v-if="posts.length > 0">
                                <tr v-for="(post, key) in posts" :key="key">
                                    <td>{{ sujet.identifiant }}</td>
                                    <td>{{ sujet.genre }}</td>
                                    <td>{{ sujet.date_naissance }}</td>
                                    <td>{{ sujet.poids }}</td>
                                    <td>{{ sujet.note }}</td>
                                    <td>{{ sujet.id_parent }}</td>
                                    <td>
                                        <router-link :to='{ name: "sujetEdit", params: { identifiant: sujet.identifiant } }'
                                            class="btn btn-success">
                                            Edit
                                        </router-link>
                                        <button type="button" @click="deletePost(sujet.identifiant)"
                                            class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody v-else>
                                <tr>
                                    <td colspan="4" align="center">No sujet Found.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template> -->


<template>
    <Navbar />
    <div class="container d-flex m-auto mt-4 w-auto sm:w-2/3">


        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6 flex justify-between  ">
                <div>

                    <h3 class="text-lg font-medium leading-6 text-gray-900">Posts List</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Personal posts and application.</p>
                </div>
                <div>

                    <router-link :to='{ name: "sujetAdd" }'>

                        <button type="submit"
                            class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <LockClosedIcon class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400"
                                    aria-hidden="true" />
                            </span>
                            Create Post
                        </button>
                    </router-link>
                </div>
            </div>
            <div class="border-t border-gray-200">
                <dl v-if="posts.length > 0">


                    <div v-for="(post, key) in posts" :key="key"
                        class="flex justify-between text-center bg-gray-50 px-4 py-5 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500  w-1/4">{{ sujet.identifiant }}</dt>
                        <dd class="mt-1 w-2/4 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            {{ sujet.genre }}
                            
                        </dd>
                        <dd class="mt-1 w-2/4 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            {{ sujet.date_naissance }}
                            
                        </dd>
                        <dd class="mt-1 w-2/4 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            {{ sujet.poids }}
                            
                        </dd>
                        <dd class="mt-1 w-2/4 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            {{ sujet.note }}
                            
                        </dd>
                        <dd class="mt-1 w-2/4 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            {{ sujet.id_parent }}
                            
                        </dd>
                        <dd class="w-1/4">

                            <a href="#"
                                class=" position-sticky inline-block rounded-md border border-transparent bg-yellow-600 py-2 px-4 text-center font-medium text-white hover:bg-yellow-700">
                                <router-link :to='{ name: "sujetEdit", params: { identifiant: sujet.identifiant } }'>
                                    Edit
                                </router-link>
                            </a>
                        </dd>
                        <dd class="w-1/4">

                            <a href="#"
                                class="inline-block rounded-md border border-transparent bg-red-600 py-2 px-4 text-center font-medium text-white hover:bg-red-700"
                                @click="deletesujet(sujet.id)">Delete</a>
                        </dd>
                    </div>

                </dl>
                <dl v-else>
                    <div>
                        No sujets Found
                    </div>
                </dl>
            </div>
        </div>
    </div>
</template>


<script setup>

import usePosts from "../../services/postservices";
import { onMounted } from "vue";



const { getSujets, sujets, destroySujet } = usePosts();
onMounted(getSujets);
console.log(getSujets);
const deletesujet = async (identifiant) => {
    return await destroySujet(identifiant);
};



</script>
