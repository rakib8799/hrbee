<template>
<!--begin::Header-->
<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Wrapper-->
        <div class="d-flex align-items-center justify-content-between">

            <Logo />
            <!--begin::Menu wrapper-->
            <div class="d-lg-block" id="kt_header_nav_wrapper">
                <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                    <!--begin::Menu-->
                    <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-600 menu-state-title-primary nav nav-flush fs-5 fw-semibold" id="kt_landing_menu">

                        <MenuItem href="#kt_body" label="Home" active />
                        <MenuItem href="#how-it-works" label="How it Works" />
                        <MenuItem href="#achievements" label="Achievements" />
                        <MenuItem href="#team" label="Team" />
                        <MenuItem href="#portfolio" label="Portfolio" />
                        <MenuItem href="#pricing" label="Pricing" />
                     </div>
                     <!--end::Menu-->
                </div>
            </div>
            <!--end::Menu wrapper-->

            <!--begin::Toolbar-->
            <div class="flex-equal text-end ms-1">
                <a href="authentication/layouts/corporate/sign-in.html" class="btn btn-success">Sign In</a>
            </div>
            <!--end::Toolbar-->
            
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Container-->
</div>
<!--end::Header-->
</template>

<script setup>
import Logo from '@/Layouts/components/header/navbar/Logo.vue';
import MenuItem from '@/Layouts/components/header/navbar/MenuItem.vue'
</script>
