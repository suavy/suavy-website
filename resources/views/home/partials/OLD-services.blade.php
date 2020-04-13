<div class="home__row">
    <div class="old-services">
        @foreach($services as $service)
            <div class="old-service">
                <div class="old-service__content">
                    <i class="{{ $service->icon }}"></i> {{ $service->translated_name }}
                </div>
            </div>
        @endforeach
    </div>
</div>
