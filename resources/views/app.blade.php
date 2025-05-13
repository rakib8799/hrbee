<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $pageTitle }} - HrBee</title>
    <meta charset="utf-8">
    <meta name="description" content="Welcome to HrBee - the simplest HRM solution for employee management. Manage leaves, attendance, and HR tasks effortlessly with HrBee.">
    <meta name="keywords" content="HRM, HrBee, employee management, leave management, attendance tracking">
    <meta name="author" content="MKRDev">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Metadata for Social Sharing -->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $pageTitle }} - HrBee">
    <meta property="og:description" content="HrBee is a leading HRM solution for managing employee data, attendance, and leaves effortlessly.">
    <meta property="og:url" content="https://hrbee.mkrdev.xyz">
    <meta property="og:site_name" content="HrBee by MKRDev">
    <meta property="og:image" content="https://hrbee.mkrdev.xyz/assets/og-image.png">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $pageTitle }} - HrBee">
    <meta name="twitter:description" content="Manage HR tasks efficiently with HrBee, the simplest HRM solution.">
    <meta name="twitter:image" content="https://hrbee.mkrdev.xyz/assets/media/logos/twitter-image.png">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://hrbee.mkrdev.xyz">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="/media/logos/favicon.ico">
    
    <!-- Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700">
    
    <!-- Stylesheets -->
    @vite('resources/css/app.css')
    
    @yield('page-css')
</head>
<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-body position-relative app-blank">
    <!-- Root Wrapper -->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!-- Main Content -->
        @yield('content')

        <!-- Footer -->
        @include('layouts.footer.footer')
    </div>

    <!-- Scroll to Top -->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    
    @vite('resources/js/app.js')
    
    <script>
    function showLoader() {
        Swal.fire({
            title: 'Please wait...',
            timer: 1000,
            didOpen: () => {
                Swal.showLoading();
            }
        });
    }
    </script>

    @yield('page-js')
</body>
</html>
