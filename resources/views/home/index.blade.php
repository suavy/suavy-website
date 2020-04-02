@extends('layouts.main')
@section('content')
    @include('home.partials.map')
    @include('home.partials.services')
    {{-- @include('home.partials.team') --}}
    @include('home.partials.match')

    <div class="home__row">
        <h2 class="title services-title">Projets</h2>
        <div class="services">
            @foreach($projects as $project)<div class="service">
                <div class="service__content">
                    {{ $project->name }} - {{ $project->features->pluck('translated_name')->implode(' , ') }}
                </div>
            </div>@endforeach
        </div>
    </div>

    <div class="home__row">
        <h2 class="title services-title">Projets open source</h2>
        <div class="services">
            @foreach($openSourceProjects as $project)<div class="service">
                <div class="service__content">
                    {{ $project->name }}
                </div>
            </div>@endforeach
        </div>
    </div>
@endsection
