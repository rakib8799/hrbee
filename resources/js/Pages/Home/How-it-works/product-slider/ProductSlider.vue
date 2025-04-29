<template>
<!--begin::Product slider-->
<div class="tns tns-default">
    <!--begin::Slider-->
    <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev1" data-tns-next-button="#kt_team_slider_next1">

        <SliderItem imgSrc="/media/preview/demos/demo1/light-ltr.png" />
        <SliderItem imgSrc="/media/preview/demos/demo2/light-ltr.png" />
        <SliderItem imgSrc="/media/preview/demos/demo4/light-ltr.png" />
        <SliderItem imgSrc="/media/preview/demos/demo5/light-ltr.png" />
        
    </div>
    <!--end::Slider-->
    <!--begin::Slider button-->
    <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">
        <i class="ki-duotone ki-left fs-2x"></i>
    </button>
    <!--end::Slider button-->
    <!--begin::Slider button-->
    <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">
        <i class="ki-duotone ki-right fs-2x"></i>
    </button>
    <!--end::Slider button-->
</div>
<!--end::Product slider-->
</template>

<script setup>
import SliderItem from '@/Pages/Home/How-it-works/product-slider/SliderItem.vue';
</script>
