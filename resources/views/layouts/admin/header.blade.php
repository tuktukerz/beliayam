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

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

    <style>
        #map {
            width: 100%;
            height: 400px;
            z-index: 0;
        }
    </style>
    <!-- END MAPS -->


</head>