<div class="home__row">
    <h2 class="title services-title">Expertise</h2>
    <div class="services">
        @foreach($services as $service)<div class="service">
            <div class="service__content">
                <i class="{{ $service->icon }}"></i> {{ $service->translated_name }}
            </div>
        </div>@endforeach
    </div>
</div>
