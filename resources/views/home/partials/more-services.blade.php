<!-- <div class="button-div">
    <div class="show-services">Check more of our services</div>
</div> -->
<div class="services-more invisible">
    <div class="services-more__title">About our services</div>
    <div class="services-more__description">Quam adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus urna. Quam elementum pulvinar etiam non. Eu consequat.</div>
    <div class="services-category">
        <div class="services-categories">
            <div class="services-avatar webdev"><i class="fal fa-browser"></i></div>
            <div class="services-categories__title webdev">Web Development</div>
            <div class="services-categories__description">Sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque. Malesuada fames ac turpis egestas sed.</div>
        </div>
        <div class="services-categories services_categories__api">
            <div class="services-avatar api"><i class="fal fa-chess-rook-alt"></i></div>
            <div class="services-categories__title api">API Integration</div>
            <div class="services-categories__description">Sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque. Malesuada fames ac turpis egestas sed.</div>
        </div>
        <div class="services-categories">
            <div class="services-avatar mobile"><i class="fal fa-mobile"></i></div>
            <div class="services-categories__title mobile">Mobile Develoment</div>
            <div class="services-categories__description">Sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque. Malesuada fames ac turpis egestas sed.</div>
        </div>
        <div class="services-categories">
            <div class="services-avatar design"><i class="fal fa-pencil-ruler"></i></div>
            <div class ="services-categories__title design">Design</div>
            <div class="services-categories__description">Sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque. Malesuada fames ac turpis egestas sed.</div>
        </div>
        <div class="services-categories">
            <div class="services-avatar data"><i class="fal fa-database"></i></div>
            <div class="services-categories__title data">Data Management</div>
            <div class="services-categories__description">Sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque. Malesuada fames ac turpis egestas sed.</div>
        </div>
        <div class="services-categories">
            <div class="services-avatar marketing"><i class="fal fa-lightbulb-on"></i></div>
            <div class="services-categories__title marketing">Marketing</div>
            <div class="services-categories__description">Sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque. Malesuada fames ac turpis egestas sed.</div>
        </div>
    </div>
    <div class="button-div">
        <button class="send-message js-services-to-contact-us">CONTACT US</button>
    </div>
</div>

<!-- Script -->

<script>
    const showDetailsServices = () => {
        const details = document.querySelector(".services-more")
        details.classList.toggle("invisible");
        // This function toggles the visibility of the div
    }

    const servicesBtnOpen = document.querySelector(".js-services-show-more")
    const servicesBtnClose = document.querySelector(".js-services-show-less")

    servicesBtnOpen.addEventListener('click', showDetailsServices); // the visibility is toggled through clicking
    servicesBtnClose.addEventListener('click', showDetailsServices); // the visibility is toggled through clicking

</script>