<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{-- Metas --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Smart CV</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.min.css') }}">

    <!-- Scripts -->
    @stack('before-head-scripts')
    <!-- Head Scripts -->

    <!-- /Head Scripts -->
    @stack('after-head-scripts')
</head>
<body class="{{ session('theme') }}">
    <div class="main">
