<div class="home__row home__row--clients bg-new">
    <div class="clients-title">Our Clients</div>
    <div class="clients">
        @foreach($projects as $project)
            <div class="client">
                <img src="{{ $project->company_logo }}"/>
            </div>
        @endforeach
    </div>
</div>
