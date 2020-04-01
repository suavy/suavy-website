<div class="home__row">
    <div class="services">

    @foreach(\App\Models\Service::all() as $service)
        <div class="service">
            <div class="service__icon">
                <i class="fad fa-fw fa-sort-alpha-up-alt"></i>
                <i class="fad fa-fw fa-rocket-launch"></i>
            </div>
            <div class="service__name">
                <h3>{{ $service->name_fr }}</h3>
            </div>
        </div>
    @endforeach
    </div>
</div>
