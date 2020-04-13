<div class="home__row home__row--contact">
    <div class="contact">
        <x-form>
            <x-inputs.checkboxes label="What type(s) of services do you need ?"/>
            <x-inputs.checkboxes name="contact_delivery" label="Delivery Time" :params="['options' => {{ \App\Models\Metas\ContactDelivery::forSelect() }}]"/>
            <x-inputs.checkboxes label="Budget Range"/>
            <x-inputs.text name="a" label="Nom" :params="['size' => 6]"/>
            <x-inputs.text name="b" label="Email" :params="['size' => 6]"/>
            <x-inputs.textarea name="c" label="Message" :params="['placeholder' => 'Type your message here']"/>
        </x-form>
    </div>
</div>
