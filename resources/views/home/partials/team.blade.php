<div class="home__row home__row--team" style="position: relative;">
    <div style="position: absolute; width: 100%; height: 100%;"  id="teamRow"></div>
    <div class="team">
        @foreach(\App\Models\User::query()->whereDisabled(false)->get() as $user)<div class="team__member-container">
            <div class="team__member">
                <div class="team__member__picture">
                    <img class="team__member__picture__image" src="https://picsum.photos/200"/>
                    <div class="team__member__picture__hover">
                        <div class="team__member__picture__hover__content">
                            <div class="team__member__picture__hover__content__citation">
                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam viverra.”

                            </div>
                        </div>
                    </div>
                </div>
                <div class="team__member__name">
                    {{ $user->firstname }} <span>{{ '@'.$user->nickname }}</span>
                </div>
                <div class="team__member__role">
                    {{ $user->role }}
                </div>
                <div class="team__member__languages">
                    <div class="team__member__language">
                        <img src="{{ asset('images/flags/rounded-rectangle/fr.svg') }}">
                    </div>
                    <div class="team__member__language">
                        <img src="{{ asset('images/flags/rounded-rectangle/uk.svg') }}">
                    </div>
                    <div class="team__member__language">
                        <img src="{{ asset('images/flags/rounded-rectangle/pt.svg') }}">
                    </div>
                    <div class="team__member__language">
                        <img src="{{ asset('images/flags/rounded-rectangle/es.svg') }}">
                    </div>
                </div>
                <div class="team__member__location">
                    <i class="fad fa-fw fa-street-view"></i> {{ $user->city->translated_name }}, {{ $user->city->country->translated_name }}
                </div>
            </div>
        </div>@endforeach
    </div>
</div>

@push('after-foot-scripts')
    <!-- PS : trianglifly est inclus dans le head
    <script>
        $(document).ready(function() {
            console.log( "ready!" );
            var pattern = Trianglify({ width: window.innerWidth, height: window.innerHeight });
            $("#teamRow").html(pattern.canvas());
        });
    </script>-->
@endpush
