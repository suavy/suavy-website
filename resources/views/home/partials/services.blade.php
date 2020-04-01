<div class="home__row">
    <h2 class="title services-title">Expertise</h2>
    <div class="services">
        @foreach(\App\Models\Service::all() as $service)<div class="service">
            <div class="service__content">
                <i class="{{ $service->icon }}"></i> {{ $service->name_fr }}
            </div>
        </div>@endforeach
    </div>
</div>
