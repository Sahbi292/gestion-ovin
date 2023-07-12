<!-- This example requires Tailwind CSS v3.0+ -->
<template>
<h1> Home Page </h1>
 
</template>

<script setup>

import { ref } from "vue";

const navigation = [
    { name: "Product", href: "#" },
    { name: "Features", href: "#" },
    { name: "Marketplace", href: "#" },
    { name: "Company", href: "#" },
];

const mobileMenuOpen = ref(false);
</script>
