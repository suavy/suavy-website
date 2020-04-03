<div class="home__row">
    <h2 class="title services-title">Open Source Projects (todo)</h2>
    <div class="projects">
        @foreach($openSourceProjects as $project)<div class="project">
            <div class="project__name">{{ $project->name }}</div>
        </div>@endforeach
    </div>
</div>
