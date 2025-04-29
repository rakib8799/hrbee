@extends('app')
@section('content')
     <!--begin::Header Section-->
     <div class="mb-0" id="home">
        <!--begin::Wrapper-->
        <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg"
            style="background-image: url(/media/svg/illustrations/landing.svg)">
            <!--begin::Header-->
            @include('layouts.header.header')
            <!--end::Header-->

            <!--begin::Landing hero-->
            @include('home.partials.landing-hero')
            <!--end::Landing hero-->

        </div>
        <!--end::Wrapper-->
        <!--begin::Curve bottom-->
        <div class="landing-curve landing-dark-color mb-10 mb-lg-20">
            <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                    fill="currentColor"></path>
            </svg>
        </div>
        <!--end::Curve bottom-->
    </div>
    <!--end::Header Section-->

    @include('home.partials.features')

    <!--begin::How It Works Section-->
    @include('home.partials.how-it-works')
    <!--end::How It Works Section-->

     <!--begin::Pricing Section-->
     @include('home.partials.pricing')
     <!--end::Pricing Section-->

    <!--begin::Statistics Section-->
{{--    @include('home.partials.statistics')--}}
    <!--end::Statistics Section-->

    <!--begin::Team Section-->
{{--    @include('home.partials.team')--}}
    <!--end::Team Section-->

    <!--begin::Projects Section-->
{{--    @include('home.partials.projects')--}}
    <!--end::Projects Section-->


    
    <!--begin::Testimonials Section-->
    @include('home.partials.testimonials')
    <!--end::Testimonials Section-->

    
<!--end::Root-->
@endsection

@section('page-js')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let lazyElements = document.querySelectorAll('.lazyload-element');

            let observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        let element = entry.target;
                        let bgImage = element.getAttribute('data-bg');
                        element.style.backgroundImage = bgImage;
                        observer.unobserve(element);
                    }
                });
            });

            lazyElements.forEach(element => {
                observer.observe(element);
            });
        });
    </script>
@endsection