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
                <!--begin::FAQ card-->
                <div class="card">
                    <!--begin::Body-->
                    <div class="card-body p-10 p-lg-15">
                        <!--begin::Classic content-->
                        <div class="mb-13">
                            <!--begin::Intro-->
                            <div class="mb-15">
                                <!--begin::Title-->
                                <h4 class="fs-2x text-gray-800 w-bolder mb-6">Frequesntly Asked Questions</h4>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <p class="fw-semibold fs-4 text-gray-600 mb-2">
                                    Welcome to HrBee's Frequently Asked Questions (FAQs) section. We understand that you may have questions about our platform, services, and how we can help your business thrive. Below, you'll find answers to some of the most common questions we receive from our users. This section is designed to provide you with quick and helpful insights.
                                    If you can’t find the answer you’re looking for, feel free to reach out to our support team for further assistance.
                                </p>
                                <!--end::Text-->
                            </div>
                            <!--end::Intro-->
                            <!--begin::Row-->
                            <div class="row mb-12">
                                <!--begin::Col-->
                                    <div class="col-md-6 ps-md-10">
                                        <!--begin::Title-->
                                        <h2 class="text-gray-800 fw-bold mb-4">Questions and Answers</h2>
                                        <!--end::Title-->
                                        <!--begin::Accordion-->
                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_1">
                                                <!--begin::Icon-->
                                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                    <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">What is HrBee?</h4>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Body-->
                                            <div id="kt_job_5_1" class="collapse show fs-6 ms-1">
                                                <!--begin::Text-->
                                                <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                    HrBee is a SaaS-based employee management platform developed by Nonditosoft. It provides a comprehensive set of tools to manage employee-related tasks, including branch management, job position management, employee management, leave management, and attendance tracking.
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed"></div>
                                            <!--end::Separator-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_2">
                                                <!--begin::Icon-->
                                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                    <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How do I get started with HrBee?</h4>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Body-->
                                            <div id="kt_job_5_2" class="collapse fs-6 ms-1">
                                                <!--begin::Text-->
                                                <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                    Getting started is simple. You can sign up on our website, select your preferred subscription plan, and start using our platform immediately.
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed"></div>
                                            <!--end::Separator-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_3">
                                                <!--begin::Icon-->
                                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                    <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">What features does HrBee offer?</h4>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Body-->
                                            <div id="kt_job_5_3" class="collapse fs-6 ms-1">
                                                <!--begin::Text-->
                                                <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                    HrBee currently offers the following features:
                                                    <ul>
                                                        <li><b>Branch Management:</b> Manage multiple branches of your organization.</li>
                                                        <li><b>Job Position Management:</b> Organize and maintain job positions within your company.</li>
                                                        <li><b>Employee Management:</b> Easily add, edit, and manage employee details.
                                                        </li>
                                                        <li><b>Leave Management:</b> Streamline leave applications, approvals, and track leave balances.
                                                        </li>
                                                        <li><b>Attendance Management:</b> Track employee attendance and working hours effectively.
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed"></div>
                                            <!--end::Separator-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_4">
                                                <!--begin::Icon-->
                                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                    <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Is HrBee suitable for small businesses?</h4>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Body-->
                                            <div id="kt_job_5_4" class="collapse fs-6 ms-1">
                                                <!--begin::Text-->
                                                <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                    Yes, HrBee is designed to be scalable and flexible, making it suitable for businesses of all sizes, including small and medium-sized enterprises (SMEs).
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->

                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_5">
                                                <!--begin::Icon-->
                                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                    <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Can I manage multiple branches with HrBee?</h4>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Body-->
                                            <div id="kt_job_5_5" class="collapse fs-6 ms-1">
                                                <!--begin::Text-->
                                                <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                    Yes, HrBee supports multi-branch management, allowing you to handle employee data, attendance, and leaves for various locations under one platform.
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->

                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_6">
                                                <!--begin::Icon-->
                                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                    <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How does the leave management feature work?</h4>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Body-->
                                            <div id="kt_job_5_6" class="collapse fs-6 ms-1">
                                                <!--begin::Text-->
                                                <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                    HrBee allows employees to apply for leaves directly through the platform. Managers can approve or reject leave requests, and the system keeps track of leave balances, ensuring transparency for both employees and employers.
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->

                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_7">
                                                <!--begin::Icon-->
                                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                    <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Does HrBee support attendance tracking?
                                                </h4>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Body-->
                                            <div id="kt_job_5_7" class="collapse fs-6 ms-1">
                                                <!--begin::Text-->
                                                <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                    Yes, HrBee includes an attendance management system where you can monitor employee check-in and check-out times. The system provides reports on attendance trends, helping businesses stay organized and efficient.
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->

                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_8">
                                                <!--begin::Icon-->
                                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                    <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How secure is my data on HrBee?
                                                </h4>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Body-->
                                            <div id="kt_job_5_8" class="collapse fs-6 ms-1">
                                                <!--begin::Text-->
                                                <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                    We take data security seriously. HrBee uses industry-standard encryption and security protocols to ensure that your data is safe. Regular backups and secure storage practices are followed to protect your information.
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->

                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_9">
                                                <!--begin::Icon-->
                                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                    <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Is there a free trial available?
                                                </h4>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Body-->
                                            <div id="kt_job_5_9" class="collapse fs-6 ms-1">
                                                <!--begin::Text-->
                                                <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                    Yes, we offer a 6 months free trial for new users. This trial allows you to explore all the features HrBee has to offer before committing to a subscription.
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->

                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_10">
                                                <!--begin::Icon-->
                                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                    <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How do I upgrade my HrBee subscription?
                                                </h4>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Body-->
                                            <div id="kt_job_5_10" class="collapse fs-6 ms-1">
                                                <!--begin::Text-->
                                                <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                    To upgrade your subscription, simply log in to your HrBee account and navigate to the "Subscription" section. From there, you can choose a new plan and complete the upgrade process.
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->

                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_11">
                                                <!--begin::Icon-->
                                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                    <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">What kind of customer support does HrBee offer?
                                                </h4>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Body-->
                                            <div id="kt_job_5_11" class="collapse fs-6 ms-1">
                                                <!--begin::Text-->
                                                <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                    HrBee provides 24/7 email support, a comprehensive knowledge base, and phone support. Our support team is always ready to assist with any queries or technical issues.
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->
                                        <!--end::Accordion-->
                                    </div>
                                <!--end::Col-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::FAQ card-->
            </div>
        </div>
        <!--end::Content-->
    </div>
</div>
<!--end::Body-->
@endsection