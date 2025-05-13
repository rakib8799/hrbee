@extends('app')
@section('content')
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<!--begin::Wrapper-->
<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg"
style="background-image: url(/media/svg/illustrations/landing.svg)">
<!--begin::Header-->
@include('layouts.header.header')
<!--end::Header-->
</div>
<!--begin::Authentication - Sign-in -->
<div class="d-flex flex-column flex-root login-page" style="background-image: url('/media/auth/bg10.jpeg');">
    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Aside-->
        <div class="d-flex flex-lg-row-fluid">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
                <!--begin::Image-->
                <div>
                    <img class="mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20"
                    src="{{ asset('assets/media/illustrations/sketchy-1/17-dark.png') }}" alt="" />
                </div>
                <!--end::Image-->
                <!--begin::Title-->
                <h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">Safer, Faster & Simpler</h1>
                <!--end::Title-->
                <!--begin::Text-->
                <div class="text-gray-600 fs-base text-center fw-semibold">
                    Cloud-based solution keeps your data safe and secure.
                    <br> Use of state-of-the-art technologies makes it faster.
                    <br> Every steps made simpler for you.
                </div>
                <!--end::Text-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Aside-->

        <!--begin::Body-->
        <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
            <!--begin::Wrapper-->
            <div class="bg-body d-flex flex-column flex-center rounded-4 w-md-600px p-10">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
                    <div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">
                        <!--begin::Form-->
                        <form class="form w-100" id="kt_sign_in_form" method="POST" action={{route('company-register.store')}}>
                            @csrf
                            <!--begin::Heading-->
                            <div class="text-center mb-8">
{{--                                <img alt="Logo" src="{{ asset('media/logos/hrbee-logo.svg') }}"--}}
{{--                                    class="h-60px h-lg-75px" />--}}
                                <h1 class="text-gray-900 fw-bolder mb-3">Sign up</h1>
                            </div>
                            <!--begin::Heading-->
                            <div class = "row g-10">
                                @foreach ($subscriptionPlan as $plan)
                                <div class="col-xl-4 mb-5">
                                    <!--begin::Option-->
                                    <a href="{{ route('company-register.create', ['subscription-plan-slug' => $plan['slug'], 'plan-type' => $plan['plan_type']]) }}" class="">
                                        <div class="plan-container w-100 d-flex flex-column flex-center rounded-3 bg-body py-5 px-5 {{ $subscriptionPlanSlug === $plan['slug'] ? 'selected-plan' : '' }}">
                                            <!--begin::Heading-->
                                            <div class="mb-2 text-center">
                                                <!--begin::Title-->
                                                <h1 class="text-gray-900 mb-2 fw-boldest" >{{ $plan['name'] }}</h1>
                                                <!--end::Title-->
                                                <!--begin::Price-->
                                                <div class="text-center">
                                                    <span class="mb-2 text-primary fa-1x">&#2547;</span>
                                                    <span class="fs-1x fw-bold text-primary">{{ $plan['price'] }}</span>
                                                    <span class="fs-7 fw-semibold opacity-50" data-kt-plan-price-month="/ Month"
                                                        data-kt-plan-price-annual="/ Yearly">/ {{ $plan['plan_type'] == 'monthly' ? 'Month' : 'Year' }}</span>
                                                </div>
                                                <!--end::Price-->
                                            </div>
                                            <!--end::Heading-->
                                        </div>
                                    </a>
                                    <!--end::Option-->
                                    <div >

                                    </div>
                                </div>
                                @endforeach

                                @error('subscription_plan_id')
                                    <span class="text-validation">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- Hidden input field for selected plan's ID -->
                            <input type="hidden" name="subscription_plan_id" id="subscription_plan_id" value="">

                            <!--Workspace-->
                            <div class="fv-row mb-4">
                                <label class="d-flex align-items-center fs-5 fw-semibold">
                                    <span class="required">Workspace Name</span>
                                </label>
                                <div class="fs-7 fw-semibold text-muted mb-1">e.g. If company name is MKR Dev Limited, Workspace Name is <strong>mkrdev</strong></div>
                                <input class="form-control form-control-lg bg-transparent" type="text" name="workspace" autocomplete="off" placeholder="Workspace Name" value="{{ old('workspace') }}" />
                                @error('workspace')
                                    <span class="text-validation" style="display: block;">{{ $message }}</span>
                                @else
                                    <span class="text-validation" style="display: none;"></span>
                                @enderror
                            </div>

                            <!--Name-->
                            <div class="fv-row mb-4">
                                <label class="d-flex align-items-center fs-5 fw-semibold">
                                    <span class="required">Super Admin Name</span>
                                </label>
                                <div class="fs-7 fw-semibold text-muted mb-1">e.g.  <strong>John Doe</strong></div>
                                <input class="form-control form-control-lg bg-transparent" type="text" name="name" autocomplete="off" placeholder="Name" value="{{ old('name') }}" />
                                @error('name')
                                    <span class="text-validation" style="display: block;">{{ $message }}</span>
                                @else
                                    <span class="text-validation" style="display: none;"></span>
                                @enderror
                            </div>

                            <!--Email-->
                            <div class="fv-row mb-4">
                                <label class="d-flex align-items-center fs-5 fw-semibold">
                                    <span class="required">Email</span>
                                </label>
                                <input class="form-control form-control-lg bg-transparent" type="email" name="email" autocomplete="off" placeholder="Email" value="{{ old('email') }}" />
                                @error('email')
                                    <span class="text-validation" style="display: block;">{{ $message }}</span>
                                @else
                                    <span class="text-validation" style="display: none;"></span>
                                @enderror
                            </div>

                            <!--Password-->
                            <div class="fv-row mb-4">
                                <label class="d-flex align-items-center fs-5 fw-semibold">
                                    <span class="required">Password</span>
                                </label>
                                <input class="form-control form-control-lg bg-transparent" type="password" name="password" autocomplete="off" placeholder="Password" />
                                @error('password')
                                    <span class="text-validation" style="display: block;">{{ $message }}</span>
                                @else
                                    <span class="text-validation" style="display: none;"></span>
                                @enderror
                            </div>

                            <!--Confirm Password-->
                            <div class="fv-row mb-4">
                                <label class="d-flex align-items-center fs-5 fw-semibold">
                                    <span class="required">Confirm Password</span>
                                </label>
                                <input class="form-control form-control-lg bg-transparent" type="password" name="password_confirmation" autocomplete="off" placeholder="Confirm password" />
                                @error('password_confirmation')
                                    <span class="text-validation" style="display: block;">{{ $message }}</span>
                                @else
                                    <span class="text-validation" style="display: none;"></span>
                                @enderror
                            </div>

                            <!-- Accept Terms and Conditions -->
                            <div class="fv-row mb-4">
                                <label class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" name="terms_conditions">
                                    <span class="form-check-label required">
                                        I agree to the <a href="{{ route('terms-conditions.index') }}" target="_blank">Terms and Conditions</a>
                                    </span>
                                </label>
                                @error('terms_conditions')
                                    <span class="text-validation">{{ $message }}</span>
                                @enderror
                            </div>

                            <!--begin::Submit button-->
                            <div class="d-grid mb-10">
                                <!-- Submit Button-->
                                <button type="submit" id="submit_button" disabled class="btn btn-lg btn-primary w-100 mb-5" onclick="handleFormSubmit(event)">Sign up</button>
                            </div>
                            <!--end::Submit button-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Authentication - Sign-in-->
</div>
<!--end::Authentication - Sign-in-->
@endsection

@section('page-js')
<script>
    // JavaScript to set the selected plan's ID to the hidden input field
    var id = "{{ $id }}";
    window.onload = function() {
        document.getElementById('subscription_plan_id').value = getSelectedPlanId(id);
    };

    function getSelectedPlanId(id) {
        return id;
    }

    document.addEventListener('DOMContentLoaded', () => {
        const inputs = document.querySelectorAll('input[name="workspace"], input[name="name"], input[name="email"], input[name="password"], input[name="password_confirmation"]');
        const termsCheckbox = document.querySelector('input[name="terms_conditions"]');
        const submitButton = document.getElementById('submit_button');
        
        let errors = {};

        inputs.forEach(input => {
            input.addEventListener('input', handleInputValidation);
        });

        if (termsCheckbox) {
            termsCheckbox.addEventListener('change', handleInputValidation);
        }

        function validateForm() {
            let isValid = true;

            // Check all input fields
            inputs.forEach(input => {
                if (input.value.trim() === '' || errors[input.name]) {
                    isValid = false;
                }
            });

            // Check the terms_conditions checkbox
            if (termsCheckbox && !termsCheckbox.checked) {
                isValid = false;
            }

            return isValid;
        }

        async function handleInputValidation(event) {
            const field = event.target.name;
            const value = event.target.value;

            if (field !== 'terms_conditions') {
                // Send AJAX request to validate the field
                try {
                    const response = await fetch('/company-register/validate-field', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({ field, value })
                    });

                    const data = await response.json();
                    errors[field] = data.errors && data.errors[field] ? data.errors[field][0] : null;
                    displayValidationErrors(field, errors[field]);
                } catch (error) {
                    console.error('Error validating field:', error);
                }
            }

            // Update submit button status
            submitButton.disabled = !validateForm();
        }

        function displayValidationErrors(field, error) {
            const errorElement = document.querySelector(`input[name="${field}"]`).nextElementSibling;
            const password = document.querySelector('input[name="password"]').value;
            const passwordConfirmation = document.querySelector('input[name="password_confirmation"]').value;

            if (error) {
                errorElement.textContent = error;
                errorElement.style.display = 'block';
            } else {
                errorElement.textContent = '';
                errorElement.style.display = 'none';
            }

            if (field === 'password_confirmation') {
                if ((password && passwordConfirmation && password !== passwordConfirmation)) {
                    errorElement.textContent = 'The password confirmation does not match.';
                    errorElement.style.display = 'block';
                } else if (error === null) {
                    errorElement.textContent = '';
                    errorElement.style.display = 'none';
                }
            }
        }
    });

    function showCompanyRegisterLoader() {
        Swal.fire({
            title: 'Please wait...',
            didOpen: () => {
                Swal.showLoading();
            },
            allowOutsideClick: false
        });
    }

    async function handleFormSubmit(event) {
        showCompanyRegisterLoader();
        
        const response = await fetch('/api/v1/central-admin/company/onboarding', {
            method: 'POST',
            body: new FormData(event.target)
        });
        
        return response.json();
    }
</script>

@endsection
    