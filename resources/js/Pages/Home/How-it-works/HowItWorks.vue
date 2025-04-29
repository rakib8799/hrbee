<template>
<!--begin::How It Works Section-->
<div class="mb-n10 mb-lg-n20 z-index-2">
    <!--begin::Container-->
    <div class="container">
        <Heading />

        <Steps />
        
        <ProductSlider />

    </div>
    <!--end::Container-->
</div>
<!--end::How It Works Section-->
</template>

<script setup>
import Heading from '@/Pages/Home/How-it-works/heading/Heading.vue';
import Steps from '@/Pages/Home/How-it-works/steps/Steps.vue';
import ProductSlider from '@/Pages/Home/How-it-works/product-slider/ProductSlider.vue';
</script>