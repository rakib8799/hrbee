<div class="mt-sm-n20">
    <!--begin::Curve top-->
    {{-- <div class="landing-curve landing-dark-color">
        <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
                fill="currentColor"></path>
        </svg>
    </div> --}}
    <!--end::Curve top-->
    <!--begin::Wrapper-->
    <div class="py-20">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Plans-->
            <div class="d-flex flex-column container pt-lg-20">
                <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <h1 class="fs-2hx fw-bold mb-5" id="pricing"
                        data-kt-scroll-offset="{default: 100, lg: 150}">Pricing</h1>
                    <div class="text-gray-600 fw-semibold fs-5">Choose what is best for you
{{--                        <br />amazing and outstanding cool and great useful admin--}}
                    </div>
                </div>
                <!--end::Heading-->
                <!--begin::Pricing-->
                <div class="text-center" id="kt_pricing">
                    <!--begin::Nav group-->
                    <div class="nav-group landing-dark-bg d-inline-flex mb-15" data-kt-buttons="true"
                        style="border: 1px dashed #2B4666;">
                        <a href="#"
                            class="btn btn-color-gray-600 btn-active btn-active-success px-6 py-3 me-2 active"
                            data-kt-plan="month" id = "monthly" onclick="toggleTab('monthly')">Monthly</a>
                        <a href="#" class="btn btn-color-gray-600 btn-active btn-active-success px-6 py-3"
                            data-kt-plan="annual" id = "annualy" onclick="toggleTab('annualy')">Yearly</a>
                    </div>
                    
                    <div class = "row g-10 justify-content-center">
                        <!-- Monthly Subscription Plan -->
                        @foreach ($subscriptionPlans['subscriptionPlanMonthly'] as $plan)
                            <div class="col-xl-4 monthlyTabContent">
                                <div class="d-flex h-100 align-items-center">
                                    <!--begin::Option-->
                                    <div class="w-100 d-flex flex-column flex-center rounded-3 bg-body py-15 px-10">
                                        <!--begin::Heading-->
                                        <div class="mb-7 text-center">
                                            <!--begin::Title-->
                                            <h1 class="text-gray-900 mb-5 fw-boldest" >{{ $plan['name'] }}</h1>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="text-gray-500 fw-semibold mb-5">{{ $plan['description'] }}</div>
                                            <!--end::Description-->
                                            <!--begin::Price-->
                                            <div class="text-center">
                                                <span class="mb-2 text-primary fa-3x">&#2547;</span>
                                                <span class="fs-3x fw-bold text-primary">{{ $plan['price'] }}</span>
                                                <span class="fs-7 fw-semibold opacity-50" data-kt-plan-price-month="/ Month"
                                                    data-kt-plan-price-annual="/ Yearly">/ Month</span>
                                            </div>
                                            <!--end::Price-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Features-->
                                        <div class="w-100 mb-10">
                                            <div class="d-flex align-items-center mb-5">    
                                                <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Up to {{ $plan['max_active_users'] }} active users</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            @foreach ($subscriptionPlans['subscriptionPlanFeatures'] as $planFeature)
                                                <div class="d-flex align-items-center mb-5"> 
                                                    @if(in_array($planFeature['id'], array_column($plan['subscription_plan_features'], 'id')))
                                                        <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">{{ $planFeature['title'] }}</span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    @else 
                                                        <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">{{ $planFeature['title'] }}</span>
                                                        <i class="ki-duotone ki-cross-circle fs-1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    @endif
                                                </div>
                                            @endforeach                              
                                        </div>
                                        <!--end::Features-->
                                        <!--begin::Select-->
                                        <a href="{{ route('company-register.create', ['subscription-plan-slug' => $plan['slug'], 'plan-type' => $plan['plan_type']]) }}" class="btn btn-primary" onclick="showLoader()">Select</a>
                                        <!--end::Select-->
                                    </div>
                                    <!--end::Option-->
                                </div>
                            </div>
                        @endforeach 

                        <!-- Annual Subscription Plan -->
                        @foreach ($subscriptionPlans['subscriptionPlanYearly'] as $plan)
                            <div class="col-xl-4 annualyTabContent" style="display: none;">
                                <div class="d-flex h-100 align-items-center">
                                    <!--begin::Option-->
                                    <div class="w-100 d-flex flex-column flex-center rounded-3 bg-body py-15 px-10">
                                        <!--begin::Heading-->
                                        <div class="mb-7 text-center">
                                            <!--begin::Title-->
                                            <h1 class="text-gray-900 mb-5 fw-boldest" >{{ $plan['name'] }}</h1>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="text-gray-500 fw-semibold mb-5">{{ $plan['description'] }}</div>
                                            <!--end::Description-->
                                            <!--begin::Price-->
                                            <div class="text-center">
                                                <span class="mb-2 text-primary fa-3x">&#2547;</span>
                                                <span class="fs-3x fw-bold text-primary">{{ $plan['price'] }}</span>
                                                <span class="fs-7 fw-semibold opacity-50" data-kt-plan-price-month="/ Month"
                                                    data-kt-plan-price-annual="/ Year">/ Year</span>
                                            </div>
                                            <!--end::Price-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Features-->
                                        <div class="w-100 mb-10">
                                            <div class="d-flex align-items-center mb-5">    
                                                <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Up to {{ $plan['max_active_users'] }} active users</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            @foreach ($subscriptionPlans['subscriptionPlanFeatures'] as $planFeature)
                                                <div class="d-flex align-items-center mb-5"> 
                                                    @if(in_array($planFeature['id'], array_column($plan['subscription_plan_features'], 'id')))
                                                        <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">{{ $planFeature['title'] }}</span>
                                                        <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    @else 
                                                        <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">{{ $planFeature['title'] }}</span>
                                                        <i class="ki-duotone ki-cross-circle fs-1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    @endif
                                                </div>
                                            @endforeach                              
                                        </div>
                                        <!--end::Features-->
                                        <!--begin::Select-->
                                        <a href="{{ route('company-register.create', ['subscription-plan-slug' => $plan['slug'], 'plan-type' => $plan['plan_type']]) }}" class="btn btn-primary" onclick="showLoader()">Select</a>
                                        <!--end::Select-->
                                    </div>
                                    <!--end::Option-->
                                </div>
                            </div>
                        @endforeach 
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
    {{-- <div class="landing-curve landing-dark-color">
        <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                fill="currentColor"></path>
        </svg>
    </div> --}}
    <!--end::Curve bottom-->
</div>

<script src="{{ asset('assets/js/custom.js') }}"></script>