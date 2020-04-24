<div class="home__row home__row--contact bg-white">
    <div class="contact">

        <div class="contact__form js-contact-container">
            <x-form link="/contact" id="contact">
                <x-inputs.checkboxes label="What type(s) of services do you need ? 🤔" name="contact[services][]" :options="$contactServices"/>
                <x-inputs.checkboxes label="Delivery Time 🐢" name="contact[deliveries][]" :options="$contactDeliveries"/>
                <x-inputs.checkboxes label="Budget Range 💰" name="contact[budgets][]" :options="$contactBudgets"/>
                <x-inputs.text name="contact[name]" label="Name*" :params="['size' => 6, 'placeholder' => 'Your name']"/>
                <x-inputs.text name="contact[email]" label="Email*" :params="['size' => 6, 'placeholder' => 'email@example.com']"/>
                <x-inputs.textarea name="contact[message]" label="Message*" :params="['placeholder' => 'Your most detailed message ❤']"/>
                <div class="form-button-container">
                    <button class="form-button">Votre projet demarre maintenant</button>
                </div>
            </x-form>
        </div>

        <div class="contact__letter-box display-none js-letter">
            <div class="contact__letter-box__top"></div>
            <div class="contact__letter-box__front"></div>
        </div>

        <div class="contact__success display-none">
            <div class="alert">
                <div class="alert__title">title</div>
                <div class="alert__text">text</div>
            </div>
        </div>

        <i style="text-align: center; background-color:green"></i>

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
            animateCSS('.contact__letter-box', 'fadeInUp',function () {
                setTimeout(function () {

                    $(".js-letter").addClass('contact__letter-box--open');
                    $('.js-contact-container').addClass('contact__form--mini');

                    setTimeout(function () {
                        $('.js-contact-container').addClass('contact__form--below').addClass('contact__form--put');
                        $('.js-letter').addClass('contact__letter-box--up');
                        setTimeout(function () {
                            $('.js-letter').addClass('contact__letter-box--close');
                            setTimeout(function () {

                            },500);
                        },300);
                    },1000);
                    /*
                    setTimeout(function () {
                        animateCSS('.js-contact-container', 'slideOutDown',function () {
                            $('.js-letter').addClass('contact__letter-box--close');
                            $('.js-contact-container').hide();
                        });
                    }, 1000);

                     */
                },1000);
            });
        });

        $("#contact").submit(function(){
            $name = $('input[name="contact[name]"]');
            $email = $('input[name="contact[email]"]');
            $message = $('textarea[name="contact[message]"]');

            console.log(!$name.val() || !$email.val() || !$message.val());

            if(!$name.val() || !$email.val() || !$message.val()) {
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
