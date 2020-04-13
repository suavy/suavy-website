<div id="open-match-modal" class="modal-container">
    <div class="modal modal--match">
        <a href="#modal-close" title="Close" class="modal__close">Close</a>
        <h1 class="title">A good match?</h1>
        <div class="modal--match__compare">
            <div class="modal--match__compare__love">
                <h2 class="title">What we do best <i class="fad fa-fw fa-grin-hearts"></i></h2>
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
            <div class="modal--match__compare__hate">
                <h2 class="title">Not our cup of tea <i class="fad fa-fw fa-meh-rolling-eyes"></i></h2>
            </div>
        </div>
        <div>
            In short: we'd like to be a substantial part of your project, <a href="#" class="link link--underline">get in touch</a>!
        </div>
    </div>
</div>

<div class="home__row home__row--services home__row--above-team bg-green">
    <div class="services">
        <div class="service-categories bg-gradient-white">
            <div class="service-categories__category">
                <div class="service-categories__category__icon"><i class="fad fa-fw fa-browser"></i></div>
                <div class="service-categories__category__name">Développement Web</div>
            </div><div class="service-categories__category">
                <div class="service-categories__category__icon"><i class="fad fa-fw fa-drafting-compass"></i></div>
                <div class="service-categories__category__name">UX/UI Design</div>
            </div><div class="service-categories__category">
                <div class="service-categories__category__icon"><i class="fad fa-fw fa-mobile"></i></div>
                <div class="service-categories__category__name">Aze</div>
            </div><div class="service-categories__category">
                <div class="service-categories__category__icon"><i class="fad fa-fw fa-user"></i></div>
                <div class="service-categories__category__name">Aze</div>
            </div>
            <div class="services-view-more">
                See <a href="#open-match-modal" class="link link--underline">everything we do</a>.
            </div>
        </div>

    </div>
</div>
