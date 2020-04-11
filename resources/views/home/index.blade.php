@extends('layouts.main')
@section('content')
    <!-- Good rows -->
    @include('home.partials.map')
    @include('home.partials.services')
    @include('home.partials.team')
    @include('home.partials.contact')

    <!-- Bad rows, need update to became more beautiful -->
    {{-- @include('home.partials.match')
    @include('home.partials.clients')--}}


@endsection
