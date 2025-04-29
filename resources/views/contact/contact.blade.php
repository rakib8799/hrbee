@extends('app')
@section('content')
<!--begin::Wrapper-->
<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg"
style="background-image: url(/media/svg/illustrations/landing.svg)">
<!--begin::Header-->
@include('layouts.header.header')
<!--end::Header-->
</div>

<!--begin::Contact-->
<div class="card rounded-4 p-10">
    <!--begin::Body-->
    <div class="card-body p-lg-17">
        <!--begin::Row-->
        <div class="row mb-3">
            <!--begin::Col-->
            <div class="col-md-6 pe-lg-10">
                <!--begin::Form-->
                <form action="{{ route('contact-us.sendMail') }}" class="form mb-15" method="post" id="kt_contact_form">
                    @csrf
                    <h1 class="fw-bold text-gray-900 mb-9">Send Us Email</h1>
                    <!--begin::Input group-->
                    <div class="row mb-5">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="fs-5 fw-semibold mb-2">
                                <span class="required">Name</span>
                            </label>
                            <input required type="text" class="form-control form-control-solid" placeholder="Your Name" name="name" value = "{{ old('name') }}"/>
                            @error('name')
                                <span class="text-validation">{{ $message }}</span>
                            @enderror
                            <!--end::Input-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="fs-5 fw-semibold mb-2">
                                <span class="required">Email</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" placeholder="Your Email" name="email" value = "{{ old('email') }}"/>
                            @error('email')
                                <span class="text-validation">{{ $message }}</span>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-5 fv-row">
                        <label class="fs-5 fw-semibold mb-2">
                            <span class="required">Subject</span>
                        </label>
                        <input class="form-control form-control-solid" placeholder="Subject" name="subject" value = "{{ old('subject') }}"/>
                        @error('subject')
                            <span class="text-validation">{{ $message }}</span>
                        @enderror
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-10 fv-row">
                        <label class="fs-6 fw-semibold mb-2">
                            <span class="required">Message</span>
                        </label>
                        <textarea class="form-control form-control-solid" rows="6" placeholder="Your Message" name="message">{{ old('message') }}</textarea>
                        @error('message')
                            <span class="text-validation">{{ $message }}</span>
                        @enderror
                    </div>
                    <!--end::Input group-->
                    <!--begin::Submit-->
                    <button type="submit" class="btn btn-primary" id="kt_contact_submit_button">
                        <!--begin::Indicator label-->
                        <span class="indicator-label">Send Feedback</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Please wait... 
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                    <!--end::Submit-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-md-6 ps-lg-10">
                <!--begin::Map-->
                <div id="kt_contact_map" class="w-100 rounded mb-2 mb-lg-0 mt-2" style="height: 486px"></div>
                <!--end::Map-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row g-5 mb-5 mb-lg-15">
            <!--begin::Col-->
            <div class="col-sm-6 pe-lg-10">
                <!--begin::Phone-->
                <div class="bg-light card-rounded d-flex flex-column flex-center flex-center p-10 h-100">
                    <!--begin::Icon-->
                    <i class="ki-duotone ki-briefcase fs-3tx text-primary">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <!--end::Icon-->
                    <!--begin::Subtitle-->
                    <h1 class="text-gray-900 fw-bold my-5">Let’s Speak</h1>
                    <!--end::Subtitle-->
                    <!--begin::Number-->
                    <div class="text-gray-700 fw-semibold fs-2">support@hrbee.mkrdev.xyz | 01673628369</div>
                    <!--end::Number-->
                </div>
                <!--end::Phone-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-sm-6 ps-lg-10">
                <!--begin::Address-->
                <div class="text-center bg-light card-rounded d-flex flex-column flex-center p-10 h-100">
                    <!--begin::Icon-->
                    <i class="ki-duotone ki-geolocation fs-3tx text-primary">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <!--end::Icon-->
                    <!--begin::Subtitle-->
                    <h1 class="text-gray-900 fw-bold my-5">Our Head Office</h1>
                    <!--end::Subtitle-->
                    <!--begin::Description-->
                    <div class="text-gray-700 fs-3 fw-semibold">Holding: 0020-00, Ward: 04, Paikgacha, Khulna</div>
                    <!--end::Description-->
                </div>
                <!--end::Address-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
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
<!--end::Contact-->
@endsection

@section('page-css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
@endsection

@section('page-js')
@if(session('status') === 'success')
    <script>
    Swal.fire({
        title: 'Success!',
        text: '{{ session('message') }}',
        icon: 'success',
        confirmButtonText: 'OK'
    });
    </script>
@endif
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="{{ asset('assets/js/custom/pages/general/contact.js') }}"></script>
@endsection
