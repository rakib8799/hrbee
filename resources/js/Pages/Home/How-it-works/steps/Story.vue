<template>
<!--begin::Story-->
<div class="text-center mb-10 mb-md-0">
    <!--begin::Illustration-->
    <img :src="imgSrc" class="mh-125px mb-9" alt="" />
    <!--end::Illustration-->
    <!--begin::Heading-->
    <div class="d-flex flex-center mb-5">
        <!--begin::Badge-->
        <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">{{ badge }}</span>
        <!--end::Badge-->
        <!--begin::Title-->
        <div class="fs-5 fs-lg-3 fw-bold text-gray-900">
            {{ title }}
        </div>
        <!--end::Title-->
    </div>
    <!--end::Heading-->
    <!--begin::Description-->
    <div class="fw-semibold fs-6 fs-lg-4 text-muted">
        <slot></slot>
    </div>
    <!--end::Description-->
</div>
<!--end::Story-->
</template>

<script setup>
import { defineProps } from 'vue';

const props = defineProps({
  imgSrc: {
    type: String,
    required: true,
  },
  badge: {
    type: String,
    required: true,
  },
  title: {
    type: String,
    required: true,
  },
});
</script>
