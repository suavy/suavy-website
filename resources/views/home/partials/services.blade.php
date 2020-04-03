<div class="home__row">
    <div class="services">
        @foreach($services as $service)
            <div class="service">
                <div class="service__content">
                    <i class="{{ $service->icon }}"></i> {{ $service->translated_name }}
                </div>
            </div>
        @endforeach
    </div>
</div>
