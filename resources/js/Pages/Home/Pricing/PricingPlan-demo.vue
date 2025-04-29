<template>
<div class="col-xl-4">
    <div class="d-flex h-100 align-items-center">
        <!--begin::Option-->
        <div :class="['w-100 d-flex flex-column flex-center rounded-3  px-10', { 'py-15': !isFeatured, 'py-20': isFeatured, 'bg-primary': isFeatured, 'bg-body': !isFeatured }]">
            <!--begin::Heading-->
            <div class="mb-7 text-center">
                <!--begin::Title-->
                <h1 :class="{'text-gray-900': !isFeatured, 'text-white': isFeatured}" class="mb-5 fw-boldest">{{ title }}</h1>
                <!--end::Title-->
                <!--begin::Description-->
                <div :class="['fw-semibold mb-5', { 'text-gray-500': !isFeatured, 'text-white opacity-75': isFeatured }]">{{ description }}</div>
                <!--end::Description-->
                <!--begin::Price-->
                <div class="text-center">
                    <span :class="['mb-2', { 'text-primary': !isFeatured, 'text-white': isFeatured }]">$</span>
                    <span :class="['fs-3x fw-bold', { 'text-primary': !isFeatured, 'text-white': isFeatured }]" :data-kt-plan-price-month="priceMonth" :data-kt-plan-price-annual="priceAnnual">{{ priceMonth }}</span>
                    <span class="fs-7 fw-semibold opacity-50" :class="{ 'text-white opacity-75': isFeatured }" :data-kt-plan-price-month="'/ Mon'" :data-kt-plan-price-annual="'/ Ann'">/ Mon</span>
                </div>
                <!--end::Price-->
            </div>
            <!--end::Heading-->
            <!--begin::Features-->
            <div class="w-100 mb-10">
                <!--begin::Item-->
                <div v-for="feature in features" :key="feature" class="d-flex flex-stack mb-5">
                    <span :class="['fw-semibold fs-6', { 'text-gray-800': !isFeatured, 'text-white opacity-75': isFeatured }]">{{ feature }}</span>
                    <i :class="['ki-duotone ki-check-circle fs-1', { 'text-success': !isFeatured, 'text-white': isFeatured }]">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div v-for="missingFeature in missingFeatures" :key="missingFeature" class="d-flex flex-stack mb-5">
                    <span :class="['fw-semibold fs-6', { 'text-gray-800': !isFeatured, 'text-white opacity-75': isFeatured }]">{{ missingFeature }}</span>
                    <i class="ki-duotone ki-cross-circle fs-1 text-gray-800">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Item-->
            </div>
            <!--end::Features-->
            <!--begin::Select-->
            <a href="#" :class="['btn', { 'btn-primary': !isFeatured, 'btn-light btn-color-primary btn-active-light-primary': isFeatured }]">Select</a>
            <!--end::Select-->
        </div>
        <!--end::Option-->
    </div>
</div>
</template>

<script setup>
import { defineProps } from 'vue';

const props = defineProps({
    title: String,
    priceMonth: Number,
    priceAnnual: Number,
    description: String,
    features: Array,
    missingFeatures: Array,
    isFeatured: {
        type: Boolean,
        default: false
    }
});
</script>
