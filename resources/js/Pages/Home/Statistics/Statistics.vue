<template>
<!--begin::Statistics Section-->
<div class="mt-sm-n10">
    <!--begin::Curve top-->
    <div class="landing-curve landing-dark-color">
        <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
        </svg>
    </div>
    <!--end::Curve top-->
    <!--begin::Wrapper-->
    <div class="pb-15 pt-18 landing-dark-bg">
        <!--begin::Container-->
        <div class="container">
            
            <Heading />
            
            <!--begin::Statistics-->
            <div class="d-flex flex-center">
                <Item />
            </div>
            <!--end::Statistics-->

            <Testimonial />

            <!--begin::Author-->
            <div class="fs-2 fw-semibold text-muted text-center">
                <a href="account/security.html" class="link-primary fs-4 fw-bold">Marcus Levy,</a>
                <span class="fs-4 fw-bold text-gray-600">KeenThemes CEO</span>
            </div>
            <!--end::Author-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Wrapper-->

    <CurveBottom />
</div>
<!--end::Statistics Section-->
</template>

<script setup>
import Heading from '@/Pages/Home/Statistics/heading/Heading.vue';
import Item from '@/Pages/Home/Statistics/items/Item.vue';
import Testimonial from '@/Pages/Home/Statistics/testimonial/Testimonial.vue';
import CurveBottom from '@/Pages/Home/Statistics/curve-bottom/CurveBottom.vue';
</script>