<template>
<div class="d-flex flex-center m-3 m-md-6" :data-bs-toggle="tooltip" :title="name">
    <img :src="imgSrc" class="mh-30px mh-lg-40px" :alt="name" />
</div>
</template>

<script setup>
import { defineProps } from 'vue';

const props = defineProps({
    name: {
        type: String,
        required: true,
    },
    imgSrc: {
        type: String,
        required: true,
    },
});
</script>
