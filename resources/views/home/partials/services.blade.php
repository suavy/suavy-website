<div class="home__row home__row--services home__row--above-team bg-green">
    <div class="services">
        <div class="service-categories" id="service-categories">
            <div class="service-categories__category service-categories__category--blue">
                <div class="service-categories__category__icon"><i class="fad fa-browser"></i></div>
                <div class="service-categories__category__name">Développement Web</div>
                <div class="service-categories__category__services">
                    @foreach($services->take(6) as $service)
                        <div class="service-categories__category__services__item">
                            <i class="{{ $service->icon }}"></i> <span>{{ $service->translated_name }}</span>
                        </div>
                    @endforeach
                </div>
            </div><div class="service-categories__category service-categories__category--pink">
                <div class="service-categories__category__icon"><i class="fad fa-drafting-compass"></i></div>
                <div class="service-categories__category__name">UX/UI Design</div>
                <div class="service-categories__category__services">
                    @foreach($services->take(6) as $service)
                        <div class="service-categories__category__services__item">
                            <i class="{{ $service->icon }}"></i> <span>{{ $service->translated_name }}</span>
                        </div>
                    @endforeach
                </div>
            </div><div class="service-categories__category service-categories__category--purple">
                <div class="service-categories__category__icon"><i class="fad fa-mobile"></i></div>
                <div class="service-categories__category__name">Aze</div>
                <div class="service-categories__category__services">
                    @foreach($services->take(6) as $service)
                        <div class="service-categories__category__services__item">
                            <i class="{{ $service->icon }}"></i> <span>{{ $service->translated_name }}</span>
                        </div>
                    @endforeach
                </div>
            </div><div class="service-categories__category service-categories__category--orange">
                <div class="service-categories__category__icon"><i class="fad fa-user"></i></div>
                <div class="service-categories__category__name">Aze</div>
                <div class="service-categories__category__services">
                    @foreach($services->take(6) as $service)
                        <div class="service-categories__category__services__item">
                            <i class="{{ $service->icon }}"></i> <span>{{ $service->translated_name }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="services-view-more">
                See <a href="#" class="link link--underline">everything we do</a>.
            </div>
        </div>
    </div>
</div>
