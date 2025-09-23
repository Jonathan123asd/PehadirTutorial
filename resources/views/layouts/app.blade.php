<!DOCTYPE html>
<html lang="id" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Pehadir - Panduan Pengguna">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="SMKN 4 Tangerang - Magang">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title', 'Panduan Pengguna - Pehadir')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/material.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
    <!-- Chart CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    {{-- SweetAlert 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        {{-- Header / Topbar Component --}}
        @include('components.header')
        {{-- Sidebar Component --}}
        @include('components.sidebar')
        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <!-- Page Content -->
            <div class="content container">
                {{-- Content Here --}}
                @yield('content')
            </div>
            <!-- /Page Content -->
        </div>
        <!-- /Page Wrapper -->
    </div>
    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- Bootstrap Core JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Slimscroll JS -->
    <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart.js') }}"></script>
    <script src="{{ asset('assets/js/greedynav.js') }}"></script>
    <!-- Theme Settings JS -->
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <script src="{{ asset('assets/js/theme-settings.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
