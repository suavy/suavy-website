<!-- <div class="button-div">
    <div class="show-services">Check more of our services</div>
</div> -->
<div class="services-more invisible">
    <h2>About our services</h2>
    <h3>Quam adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus urna. Quam elementum pulvinar etiam non. Eu consequat.</h3>
    <div class="services-category">
        <div class="services-categories services_categories__design">
            <div class="services-avatar services-avatar__design"><i class="fal fa-pencil-ruler"></i></div>
            <h3>Design</h3>
            <p>Sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque. Malesuada fames ac turpis egestas sed.</p>
        </div>
        <div class="services-categories services_categories__api">
            <div class="services-avatar services-avatar__api"><i class="fal fa-chess-rook-alt"></i></div>
            <h3>API Integration</h3>
            <p>Sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque. Malesuada fames ac turpis egestas sed.</p>
        </div>
        <div class="services-categories services_categories__webdev">
            <div class="services-avatar services-avatar__webdev"><i class="fal fa-browser"></i></div>
            <h3>Web Development</h3>
            <p>Sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque. Malesuada fames ac turpis egestas sed.</p>
        </div>
        <div class="services-categories services_categories__mobile">
            <div class="services-avatar services-avatar__mobile"><i class="fal fa-mobile"></i></div>
            <h3>Mobile Develoment</h3>
            <p>Sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque. Malesuada fames ac turpis egestas sed.</p>
        </div>
        <div class="services-categories services_categories__data">
            <div class="services-avatar services-avatar__data"><i class="fal fa-database"></i></div>
            <h3>Data Management</h3>
            <p>Sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque. Malesuada fames ac turpis egestas sed.</p>
        </div>
        <div class="services-categories services_categories__marketing">
            <div class="services-avatar services-avatar__marketing"><i class="fal fa-lightbulb-on"></i></div>
            <h3>Marketing</h3>
            <p>Sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque. Malesuada fames ac turpis egestas sed.</p>
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

    const servicesBtn = document.querySelector(".services-view-more")
    servicesBtn.addEventListener('click', showDetailsServices); // the visibility is toggled through clicking

</script>