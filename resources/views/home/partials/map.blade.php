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
                @foreach($countries as $country)
                    <div class="map-marker" style="top: {{ $country->map_marker_position_top }}%; left: {{ $country->map_marker_position_left }}%; transform: translate(-{{ $country->map_marker_position_left }}%, -{{ $country->map_marker_position_top }}%);">
                        <input class="map-marker__controller" id="map-marker-{{ $country->code }}" type="checkbox"/>
                        <label class="map-marker__button pulse" for="map-marker-{{ $country->code }}"><i class="fad fa-fw fa-times"></i></label>
                        @foreach($country->users as $user)
                            <div class="map-marker__item">@if(!is_null($user->picture))<img src="{{ $user->picture }}" height="50"/></div>@else<img src="https://picsum.photos/60"/></div>@endif
                        @endforeach
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
