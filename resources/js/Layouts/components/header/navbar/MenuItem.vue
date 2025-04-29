
<template>
<div class="menu-item">
    <a class="menu-link nav-link py-3 px-4 px-xxl-6" :href="href" :class="{ 'active': active }" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">{{ label }}</a>
</div>
</template>

<script setup>
import { defineProps } from 'vue';

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    label: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
        default: false,
    },
});
</script>
