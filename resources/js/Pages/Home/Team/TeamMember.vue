<template>
<div class="text-center">
    <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" :style="{ backgroundImage: 'url(' + photoUrl + ')' }"></div>
    <div class="mb-0">
        <a :href="profileUrl" class="text-gray-900 fw-bold text-hover-primary fs-3">{{ name }}</a>
        <div class="text-muted fs-6 fw-semibold mt-1">{{ position }}</div>
    </div>
</div>
</template>

<script setup>
defineProps({
    name: String,
    position: String,
    photoUrl: String,
    profileUrl: String
});
</script>

