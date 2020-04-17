<div class="home__row home__row--contact bg-white">
    <div class="contact">
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
        <div class="alert">
            <div class="alert__title">title</div>
            <div class="alert__text">text</div>
        </div>
    </div>
</div>

@push('after-foot-scripts')
    <script>
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

            $(this).slideUp();

            return false;
        })
    </script>
@endpush
