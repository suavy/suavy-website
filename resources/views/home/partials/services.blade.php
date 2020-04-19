<div class="home__row home__row--services home__row--above-team bg-green">
    <div class="services">
        <div class="service-categories" id="service-categories" data-count="{{ $services->count() }}">
            @foreach($services as $service)<div class="service-categories__category service-categories__category--{{ $service->color }}">
                    <div class="service-categories__category__icon"><i class="{{ $service->icon }}"></i></div>
                    <div class="service-categories__category__name">{{ $service->translated_name }}</div>
                    <div class="service-categories__category__services js-service-{{ $loop->iteration }}" style="display: none">
                        @foreach($service->services as $service_)
                            <div class="service-categories__category__services__item ">
                                <i class="{{ $service_->icon }}"></i> <span>{{ $service_->translated_name }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>@endforeach
            <div class="services-view-more js-show-services">
                See <a href="javascript:;" class="link link--underline">everything we do</a>.
            </div>
        </div>
    </div>
</div>

@push('after-foot-scripts')
    <script>
        function animateCSS(element, animationName, callback) {
            const node = document.querySelector(element)
            node.classList.add('animated', animationName)

            console.log('test');

            function handleAnimationEnd() {
                node.classList.remove('animated', animationName)
                node.removeEventListener('animationend', handleAnimationEnd)

                if (typeof callback === 'function') callback()
            }

            node.addEventListener('animationend', handleAnimationEnd)
        }

        let countServices = $('#service-categories').data('count');

        $(".js-show-services").click(function () {
            console.log('click');
            for(i=1; i<=countServices; i++){
                console.log('.js-service-'+i);
                $('.js-service-'+i).show();
                animateCSS('.js-service-'+i, 'jackInTheBox');
            }
        })

    </script>
@endpush
