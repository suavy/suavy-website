<div class="home__row home__row--clients bg-secondary">
    <div class="clients-title">Companies we worked with</div>
    <div class="clients">
        @foreach($projects as $project)
            <img src="{{ $project->company_logo }}"/>
        @endforeach
    </div>
</div>
