<div class="home__row home__row--clients bg-yellow">
    <h2 class="title">Our clients</h2>
    <div class="clients">
        {{--
        @foreach($projects as $project)
            <img src="{{ $project->company_logo }}"/>
        @endforeach--}}
        @foreach($projects->take(1) as $project)
            <div class="client">
                <img src="{{ asset('images/temp_logos/remplafrance.svg') }}" />
            </div>
            <div class="client">
                <img src="{{ asset('images/temp_logos/carrefour.svg') }}" />
            </div>
            <div class="client">
                <img src="{{ asset('images/temp_logos/bdbuzz.png') }}" />
            </div>
            <div class="client">
                <img src="{{ asset('images/temp_logos/victor-charles.png') }}" />
            </div>
            <div class="client">
                <img src="{{ asset('images/temp_logos/lookaya.png') }}" />
            </div>
        @endforeach
    </div>
</div>
