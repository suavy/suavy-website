<div class="map-row">
    <div class="map-col map-col--title">
        <div class="map-title">
            We are an
            <span>organization of freelancers</span>
            that build beautiful things around the world.
        </div>
    </div><div class="map-col map-col--map">
        <div class="map-container">
            <div class="map">
                @include('home.partials.map-svg')
                <div class="map-marker map-marker--france">
                    <input class="map-marker__controller" id="map-marker-france" type="checkbox"/>
                    <label class="map-marker__button pulse" for="map-marker-france"><i class="fad fa-fw fa-times"></i></label>
                    <div class="map-marker__item"><img src="https://picsum.photos/60"/></div>
                    <div class="map-marker__item"><img src="https://picsum.photos/60"/></div>
                </div>
                <div class="map-marker map-marker--portugal">
                    <input class="map-marker__controller" id="map-marker-portugal" type="checkbox"/>
                    <label class="map-marker__button pulse" for="map-marker-portugal"><i class="fad fa-fw fa-times"></i></label>
                    <div class="map-marker__item"><img src="https://picsum.photos/60"/></div>
                </div>
                <div class="map-marker map-marker--brazil">
                    <input class="map-marker__controller" id="map-marker-brazil" type="checkbox"/>
                    <label class="map-marker__button pulse" for="map-marker-brazil"><i class="fad fa-fw fa-times"></i></label>
                    <div class="map-marker__item"><img src="https://picsum.photos/60"/></div>
                    <div class="map-marker__item"><img src="https://picsum.photos/60"/></div>
                </div>
            </div>

        </div>
    </div>
</div>
