@extends('app')
@section('content')
<!--begin::Wrapper-->
<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg"
style="background-image: url(/media/svg/illustrations/landing.svg)">
<!--begin::Header-->
@include('layouts.header.header')
<!--end::Header-->
</div>

<!--begin::Wrapper-->
<div class="mt-10">
    <!--begin::Title-->
    <div class="fs-2x fw-bold text-gray-800 text-center mb-13">
        <span class="me-2">
            {!! $companyOnboarding['message'] !!}
        </span>
    </div>
    <!--end::Title-->
</div>
<!--begin::Wrapper-->

<!--begin::Illustration-->
@if ($companyOnboarding['success'])
    <img class="mx-auto h-150px h-lg-300px theme-light-show mb-3" src="{{ asset('assets/media/illustrations/sigma-1/7-dark.png') }}" alt="" />
@else
    <img class="mx-auto h-150px h-lg-300px theme-light-show mb-8" src="{{ asset('assets/media/illustrations/sigma-1/21-dark.png') }}" alt="" />
@endif

<!--end::Illustration-->
@endsection


