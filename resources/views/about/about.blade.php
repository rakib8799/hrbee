@extends('app')
@section('content')
<!--begin::Wrapper-->
<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg"
style="background-image: url(/media/svg/illustrations/landing.svg)">
<!--begin::Header-->
@include('layouts.header.header')
<!--end::Header-->
</div>

<!--begin::Body-->
<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
    <!--begin::Wrapper-->
    <div class="bg-body d-flex flex-column flex-center rounded-4 p-10">
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column align-items-stretch h-lg-100">
            <div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">
                <!--begin::About card-->
                    <div class="card">
                        <!--begin::Body-->
                        <div class="card-body p-lg-17">
                            <!--begin::About-->
                            <div class="mb-18">
                                <!--begin::Wrapper-->
                                <div class="mb-10">
                                    <!--begin::Top-->
                                    <div class="text-center mb-15">
                                        <!--begin::Title-->
                                        <h3 class="fs-2hx text-gray-900 mb-5">About Us</h3>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fs-5 text-muted fw-semibold">Within the last 10 years, we have sold over 100,000 admin theme copies that have been 
                                        <br />successfully deployed by small businesses to global enterprises</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Top-->
                                    <!--begin::Overlay-->
                                    <div class="overlay">
                                        <!--begin::Image-->
                                        <img class="w-100 card-rounded" src="{{ asset('assets/media/stock/1600x800/img-1.jpg') }}" alt="" />
                                        <!--end::Image-->
                                        <!--begin::Links-->
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <a href="{{ route('home.index') }}#pricing" class="btn btn-primary">Pricing</a>
                                            <a href="{{ route('home.index') }}#contact-us" class="btn btn-light-primary ms-3">Join Us</a>
                                        </div>
                                        <!--end::Links-->
                                    </div>
                                    <!--end::Container-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Description-->
                                <div class="fs-5 fw-semibold text-gray-600">
                                    <!--begin::Text-->
                                    <p class="mb-8">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words per minute and your writing skills are sharp. From the seed of the idea to finally hitting “Publish,” you might spend several days or maybe even a week “writing” a blog post, but it’s important to spend those vital hours planning your post and even thinking about 
                                    <a href="pages/blog/post.html" class="link-primary pe-1">Your Post</a>(yes, thinking counts as working if you’re a blogger) before you actually write it.</p>
                                    <!--end::Text-->
                                    <!--begin::Text-->
                                    <p class="mb-8">There’s an old maxim that states, 
                                    <span class="text-gray-800 pe-1">“No fun for the writer, no fun for the reader.”</span>No matter what industry you’re working in, as a blogger, you should live and die by this statement.</p>
                                    <!--end::Text-->
                                    <!--begin::Text-->
                                    <p class="mb-8">Before you do any of the following steps, be sure to pick a topic that actually interests you. Nothing – and 
                                    <a href="pages/blog/home.html" class="link-primary pe-1">I mean NOTHING</a>– will kill a blog post more effectively than a lack of enthusiasm from the writer. You can tell when a writer is bored by their subject, and it’s so cringe-worthy it’s a little embarrassing.</p>
                                    <!--end::Text-->
                                    <!--begin::Text-->
                                    <p class="mb-17">I can hear your objections already. “But Dan, I have to blog for a cardboard box manufacturing company.” I feel your pain, I really do. During the course of my career, I’ve written content for dozens of clients in some less-than-thrilling industries (such as financial regulatory compliance and corporate housing), but the hallmark of a professional blogger is the ability to write well about any topic, no matter how dry it may be. Blogging is a lot easier, however, if you can muster at least a little enthusiasm for the topic at hand.</p>
                                    <!--end::Text-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::About-->
                            <!--begin::Statistics-->
                            <div class="card bg-light mb-18">
                                <!--begin::Body-->
                                <div class="card-body py-15">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-center">
                                        <!--begin::Items-->
                                        <div class="d-flex flex-center flex-wrap mb-10 mx-auto gap-5 w-xl-900px">
                                            <!--begin::Item-->
                                            <div class="octagon d-flex flex-center h-200px w-200px bg-body mx-lg-10">
                                                <!--begin::Content-->
                                                <div class="text-center">
                                                    <!--begin::Symbol-->
                                                    <i class="ki-duotone ki-element-11 fs-2tx text-primary">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                    </i>
                                                    <!--end::Symbol-->
                                                    <!--begin::Text-->
                                                    <div class="mt-1">
                                                        <!--begin::Animation-->
                                                        <div class="fs-lg-2hx fs-2x fw-bold text-gray-800 d-flex align-items-center">
                                                        <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="700">0</div>+</div>
                                                        <!--end::Animation-->
                                                        <!--begin::Label-->
                                                        <span class="text-gray-600 fw-semibold fs-5 lh-0">Businesses</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="octagon d-flex flex-center h-200px w-200px bg-body mx-lg-10">
                                                <!--begin::Content-->
                                                <div class="text-center">
                                                    <!--begin::Symbol-->
                                                    <i class="ki-duotone ki-chart-pie-4 fs-2tx text-success">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                    <!--end::Symbol-->
                                                    <!--begin::Text-->
                                                    <div class="mt-1">
                                                        <!--begin::Animation-->
                                                        <div class="fs-lg-2hx fs-2x fw-bold text-gray-800 d-flex align-items-center">
                                                        <div class="min-w-50px" data-kt-countup="true" data-kt-countup-value="80">0</div>K+</div>
                                                        <!--end::Animation-->
                                                        <!--begin::Label-->
                                                        <span class="text-gray-600 fw-semibold fs-5 lh-0">Quick Reports</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="octagon d-flex flex-center h-200px w-200px bg-body mx-lg-10">
                                                <!--begin::Content-->
                                                <div class="text-center">
                                                    <!--begin::Symbol-->
                                                    <i class="ki-duotone ki-basket fs-2tx text-info">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                    </i>
                                                    <!--end::Symbol-->
                                                    <!--begin::Text-->
                                                    <div class="mt-1">
                                                        <!--begin::Animation-->
                                                        <div class="fs-lg-2hx fs-2x fw-bold text-gray-800 d-flex align-items-center">
                                                        <div class="min-w-50px" data-kt-countup="true" data-kt-countup-value="35">0</div>M+</div>
                                                        <!--end::Animation-->
                                                        <!--begin::Label-->
                                                        <span class="text-gray-600 fw-semibold fs-5 lh-0">Payments</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Testimonial-->
                                    <div class="fs-2 fw-semibold text-muted text-center mb-3">
                                    <span class="fs-1 lh-1 text-gray-700">“</span>When you care about your topic, you’ll write about it in a 
                                    <br />
                                    <span class="text-gray-700 me-1">more powerful</span>, emotionally expressive way 
                                    <span class="fs-1 lh-1 text-gray-700">“</span></div>
                                    <!--end::Testimonial-->
                                    <!--begin::Author-->
                                    <div class="fs-2 fw-semibold text-muted text-center">
                                        <a href="account/security.html" class="link-primary fs-4 fw-bold">Marcus Levy</a>
                                        <span class="fs-4 fw-bold text-gray-600">,KeenThemes CEO</span>
                                    </div>
                                    <!--end::Author-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Statistics-->
                            <!--begin::Card-->
                            <div class="card mb-4 bg-light text-center">
                                <!--begin::Body-->
                                <div class="card-body py-12">
                                    <!--begin::Icon-->
                                    <a href="https://www.facebook.com/hrbee" class="mx-4">
                                        <img src="{{ asset('assets/media/svg/brand-logos/facebook-4.svg') }}" class="h-30px my-2" alt="" />
                                    </a>
                                    <!--end::Icon-->
                                    <!--begin::Icon-->
                                    <a href="https://youtube.com/hrbee" class="mx-4">
                                        <img src="{{ asset('media/svg/brand-logos/youtube-play.svg') }}" class="h-30px my-2" alt="" />
                                    </a>
                                    <!--end::Icon-->
                                    <!--begin::Icon-->
                                    <a href="https://linkedin.com/hrbee" class="mx-4">
                                        <img src="{{ asset('media/svg/brand-logos/linkedin-2.svg') }}" class="h-30px my-2" alt="" />
                                    </a>
                                    <!--end::Icon-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Body-->
                    </div>
                <!--end::About card-->
            </div>
        </div>
        <!--end::Content-->
    </div>
</div>
<!--end::Body-->
@endsection