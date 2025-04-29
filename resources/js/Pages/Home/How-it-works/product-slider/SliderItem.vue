<template>
    <!--begin::Item-->
    <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
        <img :src="imgSrc" class="card-rounded shadow mh-lg-650px mw-100" alt="" />
    </div>
    <!--end::Item-->
</template>

<script setup>
const props = defineProps({
    imgSrc: {
        type: String,
        required: true,
    },
});
</script>
