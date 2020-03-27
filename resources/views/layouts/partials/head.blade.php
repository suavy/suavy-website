<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{-- Metas --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Smart CV</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    @stack('before-head-scripts')
    <!-- Head Scripts -->
    <script src="https://kit.fontawesome.com/7b866af269.js" crossorigin="anonymous"></script>
    <!-- /Head Scripts -->
    @stack('after-head-scripts')
</head>
<body class="{{ session('theme') }}">
    <div class="main">
