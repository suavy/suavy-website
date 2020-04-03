<div class="home__row">
    <h2 class="title services-title">Clients (todo)</h2>
    <div class="projects">
        @foreach($projects as $project)<div class="project">
            <div class="project__name">{{ $project->name }}</div>
            <div class="project__features">
                @foreach($project->features as $feature)
                    <div class="project__features__item">{{ $feature->translated_name }}</div>
                @endforeach
            </div>
        </div>@endforeach
    </div>
</div>
