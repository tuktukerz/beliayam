<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('dist') }}/assets/css/main/app.css">
    <link rel="stylesheet" href="{{ asset('dist') }}/assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="{{ asset('dist') }}/assets/images/logo/warjali.png" type="image/png">

    <link rel="stylesheet" href="{{ asset('dist') }}/assets/css/shared/iconly.css">
    <link rel="stylesheet" href="{{ asset('dist') }}/assets/extensions/simple-datatables/style.css">
    <link rel="stylesheet" href="{{ asset('dist') }}/assets/css/pages/simple-datatables.css">
    <link rel="stylesheet" href="{{ asset('dist') }}/assets/extensions/flatpickr/flatpickr.min.css">

    <script src="{{ asset('vendor/smart-ads/js/smart-banner.min.js') }}"></script>


</head>