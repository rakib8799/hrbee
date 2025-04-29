<template>
<!--begin::Landing hero-->
<div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
    <!--begin::Heading-->
    <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
        <!--begin::Title-->
        <h1 class="text-white lh-base fw-bold fs-2x fs-lg-3x mb-15">Build An Outstanding Solutions
            <br />with
            <span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
                <span id="kt_landing_hero_text">The Best Theme Ever</span>
            </span>
        </h1>
        <!--end::Title-->
        <!--begin::Action-->
        <a href="index.html" class="btn btn-primary">Try Metronic</a>
        <!--end::Action-->
    </div>
    <!--end::Heading-->
    <!--begin::Clients-->
    <div class="d-flex flex-center flex-wrap position-relative px-5">
        <Client 
            v-for="client in clients" 
            :key="client.name" 
            :name="client.name" 
            :imgSrc="client.imgSrc" 
            />
    </div>
    <!--end::Clients-->
</div>
<!--end::Landing hero-->
</template>

<script setup>
import Client from '@/Pages/Home/Landing-hero/Client.vue';

const clients = [
    {
        name: "Fujifilm",
        imgSrc: "/media/svg/brand-logos/fujifilm.svg"
    },
    {
        name: "Vodafone",
        imgSrc: "/media/svg/brand-logos/vodafone.svg"
    },
    {
        name: "KPMG International",
        imgSrc: "/media/svg/brand-logos/kpmg.svg"
    },
    {
        name: "Nasa",
        imgSrc: "/media/svg/brand-logos/nasa.svg"
    },
    {
        name: "Aspnetzero",
        imgSrc: "/media/svg/brand-logos/aspnetzero.svg"
    },
    {
        name: "AON - Empower Results",
        imgSrc: "/media/svg/brand-logos/aon.svg"
    },
    {
        name: "Hewlett-Packard",
        imgSrc: "/media/svg/brand-logos/hp-3.svg"
    },
    {
        name: "Truman",
        imgSrc: "/media/svg/brand-logos/truman.svg"
    },
];
</script>
