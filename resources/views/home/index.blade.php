@extends('layouts.main')
@section('content')
    @include('home.partials.map')
    @include('home.partials.services')
    @include('home.partials.team')

    @include('home.partials.match')
    {{--
    @include('home.partials.projects')

    @include('home.partials.open-source-projects')
    --}}
@endsection
