<!-- <div class="button-div">
    <div class="show-services">Check more of our services</div>
</div> -->
<div class="services-more invisible">
    <h2>Our services</h2>
    <h3>Quam adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus urna. Quam elementum pulvinar etiam non. Eu consequat.</h3>
    <div class="services-category">
        <div class="services-categories">
            <div class="services-avatar"><i class="fas fa-angle-double-left"></i></div>
            <h3>Webdesign</h3>
            <p>Sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque. Malesuada fames ac turpis egestas sed.</p>
        </div>
        <div class="services-categories">
            <div class="services-avatar"><i class="fas fa-angle-double-left"></i></div>
            <h3>Webdesign</h3>
            <p>Sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque. Malesuada fames ac turpis egestas sed.</p>
        </div>
        <div class="services-categories">
            <div class="services-avatar"><i class="fas fa-angle-double-left"></i></div>
            <h3>Webdesign</h3>
            <p>Sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque. Malesuada fames ac turpis egestas sed.</p>
        </div>
        <div class="services-categories">
            <div class="services-avatar"><i class="fas fa-angle-double-left"></i></div>
            <h3>Webdesign</h3>
            <p>Sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque. Malesuada fames ac turpis egestas sed.</p>
        </div>
        <div class="services-categories">
            <div class="services-avatar"><i class="fas fa-angle-double-left"></i></div>
            <h3>Webdesign</h3>
            <p>Sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque. Malesuada fames ac turpis egestas sed.</p>
        </div>
        <div class="services-categories">
            <div class="services-avatar"><i class="fas fa-angle-double-left"></i></div>
            <h3>Webdesign</h3>
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