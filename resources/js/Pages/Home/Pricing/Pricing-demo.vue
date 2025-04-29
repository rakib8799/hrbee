<template>
<!--begin::Pricing Section-->
<div class="mt-sm-n20">
    <!--begin::Curve top-->
    <div class="landing-curve landing-dark-color">
        <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
        </svg>
    </div>
    <!--end::Curve top-->
    <!--begin::Wrapper-->
    <div class="py-20 landing-dark-bg">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Plans-->
            <div class="d-flex flex-column container pt-lg-20">
                <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <h1 class="fs-2hx fw-bold text-white mb-5" id="pricing" data-kt-scroll-offset="{default: 100, lg: 150}">
                        Clear Pricing Makes it Easy
                    </h1>
                    <div class="text-gray-600 fw-semibold fs-5">
                        Save thousands to millions of bucks by using single tool for
                        different <br />amazing and outstanding cool and great useful
                        admin
                    </div>
                </div>
                <!--end::Heading-->
                <!--begin::Pricing-->
                <div class="text-center" id="kt_pricing">
                    <!--begin::Nav group-->
                    <div class="nav-group landing-dark-bg d-inline-flex mb-15" data-kt-buttons="true" style="border: 1px dashed #2b4666">
                        <a href="#" class="btn btn-color-gray-600 btn-active btn-active-success px-6 py-3 me-2 active" data-kt-plan="month">Monthly</a>
                        <a href="#" class="btn btn-color-gray-600 btn-active btn-active-success px-6 py-3" data-kt-plan="annual">Annual</a>
                    </div>
                    <!--end::Nav group-->
                    <!--begin::Row-->
                    <div class="row g-10">
                        <!--begin::Col-->
                        <PricingPlan title="Startup" :priceMonth="99" :priceAnnual="999" description="Best Settings for Startups" :features="['Up to 10 Active Users', 'Up to 30 Project Integrations']" :missingFeatures="['Keen Analytics Platform', 'Targets Timelines & Files', 'Unlimited Projects']" />
                        <!--end::Col-->
                        <!--begin::Col-->
                        <PricingPlan title="Business" :priceMonth="199" :priceAnnual="1999" description="Best Settings for Business" :features="['Up to 10 Active Users', 'Up to 30 Project Integrations', 'Keen Analytics Platform', 'Targets Timelines & Files']" :missingFeatures="['Unlimited Projects']" isFeatured />
                        <!--end::Col-->
                        <!--begin::Col-->
                        <PricingPlan title="Enterprise" :priceMonth="999" :priceAnnual="9999" description="Best Settings for Enterprise" :features="['Up to 10 Active Users', 'Up to 30 Project Integrations', 'Keen Analytics Platform', 'Targets Timelines & Files', 'Unlimited Projects']" />
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Pricing-->
            </div>
            <!--end::Plans-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Wrapper-->
    <!--begin::Curve bottom-->
    <div class="landing-curve landing-dark-color">
        <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
        </svg>
    </div>
    <!--end::Curve bottom-->
</div>
<!--end::Pricing Section-->
</template>
    
<script setup>
// import PricingPlan from '@/Pages/Home/Pricing/PricingPlan.vue';
</script>
