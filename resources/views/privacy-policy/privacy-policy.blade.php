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
                <!--begin::Terms and Conditions-->
                <div class="card shadow-sm">
                    <div class="card-body">
                        <!-- Introduction -->
                        <div id="introduction">
                            <h1 class="card-title">Privacy Policy</h1>
                            <p>At Nonditosoft and its affiliated apps and subsidiaries, we are fully committed to safeguarding your privacy and respecting your data protection rights. This policy outlines how we collect, use, disclose, retain, and protect your personal information. Please read it carefully to understand how we handle and secure your data.</p>
                        </div>

                        <!-- Collect Information -->
                        <div class="mt-5">
                            <h4>1. The Information We Collect</h4>
                            <p>We collect personal information when you interact with our website, including submitting forms or requests.</p>
                            <p>The types of data we gather include your name, email address, phone number, mailing address, as well as device location, IP address, browsing history, transaction data, and other relevant details to enhance your experience.</p>
                        </div>

                        <!-- Contact Information -->
                        <div class="mt-5">
                            <h4>2. Contact Information</h4>
                            <p>For any questions, concerns, or requests related to this policy or our privacy practices, or to exercise your privacy rights, please contact us at:
                            </p>    
                            <div>
                                <p><span class="fw-bold">Email:</span> support@hrbee.mkrdev.xyz</p>
                                <p><span class="fw-bold">Phone:</span> +8801673628369</p>
                                <p><span class="fw-bold">Operating Hours:</span> 7 days a week, Saturday to Friday, from 09:00 AM to 06:00 PM (GMT +6).
                                </p>
                                <p><span class="fw-bold">Address:</span> Holding 0020-00, Ward 04, Paikgacha, Khulna</p>
                            </div>
                        </div>

                        <!-- How we use information -->
                        <div class="mt-5">
                            <h4>3. How we use your information</h4>
                            <p>The data we collect is used for the following purposes:</p>
                            <ul>
                                <li>Operating and maintaining our website</li>
                                <li>Personalizing and improving your experience</li>
                                <li>Analyzing how the website is used</li>
                                <li>Developing new products, features, and services</li>
                                <li>Communicating updates, customer service, and promotional content</li>
                                <li>Sending emails</li>
                                <li>Detecting and preventing fraud</li>
                            </ul>
                            <p>Organizations may link to our home page or content if the link:
                            </p>
                            <ul>
                                <li>Is not deceptive</li>
                                <li>Does not falsely imply sponsorship, endorsement, or approval</li>
                                <li>Fits within the context of the linking party’s site</li>
                                <li>Does not portray Nonditosoft or its products/services in a false, misleading, or derogatory manner</li>
                                <li>Complies with all applicable laws and regulations governing content and linking practices</li>
                            </ul>
                        </div>    
                    </div>
                </div>
                <!--end::Terms and Conditions-->
            </div>
        </div>
        <!--end::Content-->
    </div>
</div>
<!--end::Body-->
@endsection