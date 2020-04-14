<div class="home__row home__row--contact bg-white">
    <div class="contact" id="contact">
        <x-form link="/contact">
            <x-inputs.checkboxes label="What type(s) of services do you need ? 🤔" name="contact[services][]" :options="$contactServices"/>
            <x-inputs.checkboxes label="Delivery Time 🐢" name="contact[deliveries][]" :options="$contactDeliveries"/>
            <x-inputs.checkboxes label="Budget Range 💰" name="contact[budgets][]" :options="$contactBudgets"/>
            <x-inputs.text name="contact[name]" label="Name" :params="['size' => 6, 'placeholder' => 'Your name']"/>
            <x-inputs.text name="contact[email]" label="Email" :params="['size' => 6, 'placeholder' => 'email@example.com']"/>
            <x-inputs.textarea name="contact[message]" label="Message" :params="['placeholder' => 'Your most detailed message ❤']"/>
        </x-form>
    </div>
</div>
