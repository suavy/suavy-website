<div class="home__row home__row--contact">
    <div class="contact--check display-none js-contact-success"><i class="fad fa-check"></i></div>
    <div class="contact js-contact-all">

        <div class="contact__form js-contact-container">
            <x-form link="/contact" id="contact">
                <x-inputs.checkboxes :label="__('base.contact.services_label')" name="contact[services][]" :options="$contactServices"/>
                <x-inputs.checkboxes :label="__('base.contact.deliveries_label')" name="contact[deliveries][]" :options="$contactDeliveries"/>
                <x-inputs.checkboxes :label="__('base.contact.budgets_label')" name="contact[budgets][]" :options="$contactBudgets"/>
                <x-inputs.text name="contact[name]" :label="__('base.contact.name_label')" />
                <x-inputs.text name="contact[email]" :label="__('base.contact.email_label')" />
                <div id="message-wrapper">
                    <x-inputs.textarea name="contact[message]" :label="__('base.contact.message_label')" />
                </div>
                <div class="form-button-container">
                    <button class="form-button">@lang('base.contact.button_name')</button>
                </div>
            </x-form>
        </div>

        <div class="contact__letter-box display-none js-letter">
            <div class="contact__letter-box__top"></div>
            <div class="contact__letter-box__front" id="scroll-to-footer"></div>
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

        $('#contact').click(function () {


                $('.contact__letter-box').show();
                setTimeout(function () {
                    $('html, body').animate({scrollTop: $("#scroll-to-footer").offset().top}, 300);
                },150);
                animateCSS('.contact__letter-box', 'fadeInUp',function () {



                    setTimeout(function () {

                        $(".js-letter").addClass('contact__letter-box--open');
                        $('.js-contact-container').addClass('contact__form--mini');

                        setTimeout(function () {
                            $('.js-contact-container').addClass('contact__form--below').addClass('contact__form--put');
                            setTimeout(function () {
                                $('.js-letter').addClass('contact__letter-box--close');
                                setTimeout(function () {
                                    animateCSS('.js-contact-all','flipOutX',function () {
                                        $('.js-contact-all').hide();
                                        $('.js-contact-success').show();
                                        animateCSS('.js-contact-success', 'flipInX');
                                    });
                                },1000);
                            },500);
                        },1000);
                    },700);
                });
                // Go
        });

        $('input[name="contact[name]"],input[name="contact[email]"],textarea[name="contact[message]').click(function () {
            $(this).parent().removeClass('error');
        });

        $("#contact").submit(function(){
            let error = false;
            let $name = $('input[name="contact[name]"]');
            let $email = $('input[name="contact[email]"]');
            let $message = $('textarea[name="contact[message]"]');

            if(!$name.val()){
                $name.parent().addClass("error");
                error = true;
            }
            if(!$email.val()){
                $email.parent().addClass("error");
                error = true;
            }
            if(!$message.val()){
                $message.parent().addClass("error");
                error = true;
            }
            if(error) {
                return false;
            }

            $.post( $(this).attr('action'), $(this).serialize(), function(data) {
                    console.log(data);
                },
                'json' // I expect a JSON response
            );

            animateCSS('#contact', 'hinge');
            $(this).slideUp();

            return false;
        })
    </script>
@endpush
