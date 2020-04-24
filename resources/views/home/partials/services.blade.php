<div class="home__row home__row--services home__row--above-team bg-primary">
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
            <div class="services-view-more">
                <span class="js-services-show-more">See <a href="javascript:;" class="link link--underline">everything we do</a>.</span>
                <span style="display: none" class="js-services-show-more-or-contact"><span class="link link--underline js-services-to-contact-us" >Contact us</span> or <span class="js-services-show-less link link--underline" >see less</span>.</span>
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

        $(".js-services-show-more").click(function () {
            for(i=1; i<=countServices; i++){
                console.log('.js-service-'+i);
                $('.js-service-'+i).show();
                animateCSS('.js-service-'+i, 'jackInTheBox');
            }
            animateCSS('.js-services-show-more', 'fadeOutRight',function () {
                $('.js-services-show-more').hide();
                $('.js-services-show-more-or-contact').show();
                animateCSS('.js-services-show-more-or-contact', 'fadeInLeft');
            });
        })

        $('.js-services-show-less').click(function () {
            for(i=1; i<=countServices; i++){
                let e = $('.js-service-'+i);
                animateCSS('.js-service-'+i, 'zoomOut',function(){
                    $('.js-services-show-more-or-contact').hide();
                    $('.js-services-show-more').show();
                    e.hide();
                });
            }
            animateCSS('.js-services-show-more-or-contact', 'fadeOutRight',function () {
                $('.js-services-show-more').show();
                $('.js-services-show-more-or-contact').hide();
                animateCSS('.js-services-show-more', 'fadeInLeft');
            });
        });

        $('.js-services-to-contact-us').on('click', function() {
            var speed = 500; // Durée de l'animation (en ms)
            $('html, body').animate( { scrollTop: $("#contact").offset().top }, speed ); // Go
            return false;
        });

    </script>
@endpush
