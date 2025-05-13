<div class="mb-0">
    <!--begin::Curve top-->
    <div class="landing-curve landing-dark-color">
        <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
                fill="currentColor"></path>
        </svg>
    </div>
    <!--end::Curve top-->
    <!--begin::Wrapper-->
    <div class="landing-dark-bg pt-20">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Row-->
            <div class="row py-10 py-lg-20">
                <!--begin::Col-->
                <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
                    <!--begin::Block-->
                    <div class="rounded landing-dark-border p-9 mb-10">
                        <!--begin::Title-->
                        <h2 class="text-white">Get Your Customized Quote</h2>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <span class="fw-normal fs-4 text-gray-300">Contact us:
                            <a href="mailto:support@hrbee.mkrdev.xyz"
                                class="text-white opacity-50 text-hover-primary">support@hrbee.mkrdev.xyz</a></span>
                        <!--end::Text-->
                    </div>
                    <!--end::Block-->
                    <!--begin::Block-->
                    {{--<div class="rounded landing-dark-border p-9">
                        <!--begin::Title-->
                        <h2 class="text-white">How About a Custom Project?</h2>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <span class="fw-normal fs-4 text-gray-700">Use Our Custom Development Service.
                            <a href="pages/user-profile/overview.html"
                                class="text-white opacity-50 text-hover-primary">Click to Get a
                                Quote</a></span>
                        <!--end::Text-->
                    </div>--}}
                    <!--end::Block-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-lg-6 ps-lg-16">
                    <!--begin::Navs-->
                    <div class="d-flex justify-content-center">
                        <!--begin::Links-->
                        <div class="d-flex fw-semibold flex-column me-20">
                            <!--begin::Subtitle-->
                            <h4 class="fw-bold text-gray-500 mb-6">More for HrBee</h4>
                            <!--end::Subtitle-->
                            <!--begin::Link-->
                            <a href="{{ route('faqs.index') }}"
                                class="text-white opacity-50 text-hover-primary fs-5 mb-6">FAQ</a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a href=""
                                class="text-white opacity-50 text-hover-primary fs-5 mb-6">Video Tutorials</a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a href=""
                                class="text-white opacity-50 text-hover-primary fs-5 mb-6">Support Forum</a>
                            <!--end::Link-->
                        </div>
                        <!--end::Links-->
                        <!--begin::Links-->
                        <div class="d-flex fw-semibold flex-column ms-lg-20">
                            <!--begin::Subtitle-->
                            <h4 class="fw-bold text-gray-500 mb-6">Stay Connected</h4>
                            <!--end::Subtitle-->
                            <!--begin::Link-->
                            <a href="https://www.facebook.com/hrbee" class="mb-6">
                                <img src="{{ asset('media/svg/brand-logos/facebook-4.svg') }}" class="h-20px me-2" alt="" loading="lazy" />
                                <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
                            </a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a href="https://youtube.com/hrbee" class="mb-6">
                                <img src="{{ asset('media/svg/brand-logos/youtube-play.svg') }}" class="h-20px me-2" alt="" loading="lazy" />
                                <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Youtube</span>
                            </a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a href="https://linkedin.com/hrbee" class="mb-6">
                                <img src="{{ asset('media/svg/brand-logos/linkedin-2.svg') }}" class="h-20px me-2"
                                    alt="" loading="lazy" />
                                <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Linkedin</span>
                            </a>
                            <!--end::Link-->
                        </div>
                        <!--end::Links-->
                    </div>
                    <!--end::Navs-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
        <!--begin::Separator-->
        <div class="landing-dark-separator"></div>
        <!--end::Separator-->
        <!--begin::Container-->
        <div class="container">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                <!--begin::Copyright-->
                <div class="d-flex align-items-center order-2 order-md-1">
                    <!--begin::Logo-->
                    <a href="{{ route('home.index') }}">
                        <img alt="Logo" src="{{ asset('media/logos/hrbee-icon-white.svg') }}" class="h-30px h-md-40px h-lg-45px"/>
                    </a>
                    <!--end::Logo image-->
                    <!--begin::Logo image-->
                    <a class="mx-5 fs-6 fw-semibold text-gray-600 pt-1" href="https://mkrdev.xyz">&copy; 2025
                        MKR Dev</a>
                    <!--end::Logo image-->
                </div>
                <!--end::Copyright-->
                <!--begin::Menu-->
                <ul class="menu menu-gray-600 menu-hover-primary fw-semibold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
                    <li class="menu-item">
                        <a href="{{ route('about.index') }}" class="menu-link px-2">About</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('privacy-policy.index') }}" class="menu-link px-2">Privacy Policy</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('terms-conditions.index') }}" class="menu-link px-2">Terms & Conditions</a>
                    </li>
                </ul>
                <!--end::Menu-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Wrapper-->
</div>

