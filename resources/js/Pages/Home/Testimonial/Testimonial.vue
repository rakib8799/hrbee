<template>
<!--begin::Testimonials Section-->
<div class="mt-20 mb-n20 position-relative z-index-2">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Heading-->
        <div class="text-center mb-17">
            <!--begin::Title-->
            <h3 class="fs-2hx text-gray-900 mb-5" id="clients" data-kt-scroll-offset="{default: 125, lg: 150}">
                What Our Clients Say
            </h3>
            <!--end::Title-->
            <!--begin::Description-->
            <div class="fs-5 text-muted fw-bold">
                Save thousands to millions of bucks by using single tool <br />for
                different amazing and great useful admin
            </div>
            <!--end::Description-->
        </div>
        <!--end::Heading-->
        <!--begin::Row-->
        <div class="row g-lg-10 mb-10 mb-lg-20">
            <ClientSection v-for="(testimonial, index) in testimonials" :key="index" :testimonial="testimonial" />
        </div>
        <!--end::Row-->
        <!--begin::Highlight-->
        <div class="d-flex flex-stack flex-wrap flex-md-nowrap card-rounded shadow p-8 p-lg-12 mb-n5 mb-lg-n13" style="background: linear-gradient(90deg, #20aa3e 0%, #03a588 100%)">
            <!--begin::Content-->
            <div class="my-2 me-5">
                <!--begin::Title-->
                <div class="fs-1 fs-lg-2qx fw-bold text-white mb-2">
                    Start With Metronic Today,
                    <span class="fw-normal">Speed Up Development!</span>
                </div>
                <!--end::Title-->
                <!--begin::Description-->
                <div class="fs-6 fs-lg-5 text-white fw-semibold opacity-75">
                    Join over 100,000 Professionals Community to Stay Ahead
                </div>
                <!--end::Description-->
            </div>
            <!--end::Content-->
            <!--begin::Link-->
            <a href="https://1.envato.market/EA4JP" class="btn btn-lg btn-outline border-2 btn-outline-white flex-shrink-0 my-2">Purchase on Themeforest</a>
            <!--end::Link-->
        </div>
        <!--end::Highlight-->
    </div>
    <!--end::Container-->
</div>
<!--end::Testimonials Section-->
</template>

<script setup>
import { ref } from 'vue';
import ClientSection from '@/Pages/Home/Testimonial/ClientSection.vue';

const testimonials = ref([
    {
        rating: 5,
        title: "This is by far the cleanest template and the most well structured",
        feedback: "The most well thought out design theme I have ever used. The codes are up to standard. The css styles are very clean. In fact, the cleanest and the most up to standard I have ever seen.",
        author: {
            name: "Paul Miles",
            position: "Development Lead",
            avatar: "/media/avatars/300-1.jpg",
        },
    },
    {
        rating: 5,
        title: "This is by far the cleanest template and the most well structured",
        feedback: "The most well thought out design theme I have ever used. The codes are up to standard. The css styles are very clean. In fact, the cleanest and the most up to standard I have ever seen.",
        author: {
            name: "Janya Clebert",
            position: "Development Lead",
            avatar: "/media/avatars/300-2.jpg",
        },
    },
    {
        rating: 5,
        title: "This is by far the cleanest template and the most well structured",
        feedback: "The most well thought out design theme I have ever used. The codes are up to standard. The css styles are very clean. In fact, the cleanest and the most up to standard I have ever seen.",
        author: {
            name: "Steave Brown",
            position: "Development Lead",
            avatar: "/media/avatars/300-16.jpg",
        },
    },
]);
</script>
