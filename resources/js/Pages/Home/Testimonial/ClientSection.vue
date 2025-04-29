<template>
<!--begin::Col-->
<div class="col-lg-4">
    <!--begin::Testimonial-->
    <div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
        <!--begin::Wrapper-->
        <div class="mb-7">
            <!--begin::Rating-->
            <div class="rating mb-6">
                <div v-for="star in testimonial.rating" :key="star" class="rating-label me-2 checked">
                    <i class="ki-duotone ki-star fs-5"></i>
                </div>
            </div>
            <!--end::Rating-->
            <!--begin::Title-->
            <div class="fs-2 fw-bold text-gray-900 mb-3">
                {{ testimonial.title }}
            </div>
            <!--end::Title-->
            <!--begin::Feedback-->
            <div class="text-gray-500 fw-semibold fs-4">
                {{ testimonial.feedback }}
            </div>
            <!--end::Feedback-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Author-->
        <div class="d-flex align-items-center">
            <!--begin::Avatar-->
            <div class="symbol symbol-circle symbol-50px me-5">
                <img :src="testimonial.author.avatar" class="" alt="" />
            </div>
            <!--end::Avatar-->
            <!--begin::Name-->
            <div class="flex-grow-1">
                <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">{{ testimonial.author.name }}</a>
                <span class="text-muted d-block fw-bold">{{ testimonial.author.position }}</span>
            </div>
            <!--end::Name-->
        </div>
        <!--end::Author-->
    </div>
    <!--end::Testimonial-->
</div>
<!--end::Col-->
</template>

<script setup>
import { defineProps } from 'vue';
const props = defineProps({
    testimonial: Object,
});
</script>
