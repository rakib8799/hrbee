<template>
<head>
    <title>
        Metronic - The World's #1 Selling Bootstrap Admin Template - Metronic by
        KeenThemes
    </title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template - Metronic by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Metronic by Keenthemes" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="/media/logos/favicon.ico" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-body position-relative app-blank">
    <!--begin::Theme mode setup on page load-->
    <!--end::Theme mode setup on page load-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Header Section-->
        <div class="mb-0" id="home">
            <!--begin::Wrapper-->
            <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url(/media/svg/illustrations/landing.svg)">
                <Navbar />
                <LandingHero />
            </div>
            <!--end::Wrapper-->
            <CurveBottom />
        </div>
        <!--end::Header Section-->
        <!-- <Header /> -->

        <HowItWorks />

        <Statistics />

        <Team />

        <Project />

        <Pricing />

        <Testimonial />

        <Footer />

        <ScrollTop />
    </div>
    <!--end::Root-->
    <ScrollTop />
</body>
</template>

<script>
import Navbar from '@/Layouts/components/header/navbar/Navbar.vue';
import LandingHero from '@/Pages/Home/Landing-hero/LandingHero.vue';
import CurveBottom from '@/Pages/Home/Landing-hero/curve-bottom/CurveBottom.vue';
import HowItWorks from '@/Pages/Home/How-it-works/HowItWorks.vue';
import Statistics from "@/Pages/Home/Statistics/Statistics.vue";
import Team from "@/Pages/Home/Team/Team.vue";
import Project from "@/Pages/Home/Project/Project.vue";
import Pricing from "@/Pages/Home/Pricing/Pricing.vue";
import Testimonial from "@/Pages/Home/Testimonial/Testimonial.vue";
import Footer from "@/Layouts/components/footer/Footer.vue";
import ScrollTop from "@/Layouts/components/scroll-top/ScrollTop.vue";
export default {
    name: "LandingPage",
    components: {
        Navbar,
        LandingHero,
        CurveBottom,
        HowItWorks,
        Statistics,
        Team,
        Project,
        Pricing,
        Testimonial,
        Footer,
        ScrollTop
    },
    mounted() {
        this.loadScript("/resources/js/components/landing/", () => {
            console.log("plugins.bundle.js loaded");
            this.loadScript("/resources/js/scripts.bundle.js", () => {
                console.log("scripts.bundle.js loaded");
                // Initialize your script-dependent code here
            });
        });
    },
    methods: {
        loadScript(src, callback) {
            const script = document.createElement("script");
            script.src = src;
            script.onload = callback;
            script.onerror = () => console.error(`Failed to load script ${src}`);
            document.head.appendChild(script);
        },
    },
};
</script>
