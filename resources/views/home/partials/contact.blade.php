<div class="home__row home__row--contact">
    <div class="contact">
        <x-form>
            <x-inputs.checkboxes label="What type(s) of services do you need ?"/>
            <x-inputs.checkboxes label="Delivery Time"/>
            <x-inputs.checkboxes label="Budget Range"/>
            <x-inputs.text name="a" label="Nom" :params="['size' => 6, 'placeholder' => 'Your name']"/>
            <x-inputs.text name="b" label="Email" :params="['size' => 6, 'placeholder' => 'email@example.com']"/>
            <x-inputs.textarea name="c" label="Message" :params="['placeholder' => 'Your most detailed message ❤']"/>
        </x-form>
    </div>
</div>
