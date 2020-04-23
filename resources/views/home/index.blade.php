@extends('layouts.main')
@section('content')
    <!-- Good rows -->
    @include('home.partials.map')
    @include('home.partials.services')
    @include('home.partials.team')
    <div class="home__row bg-gradient-secondary"></div>
    @include('home.partials.contact')


    <!-- Bad rows, need update to became more beautiful -->
    {{-- @include('home.partials.match')

    @include('home.partials.clients')--}}


@endsection
