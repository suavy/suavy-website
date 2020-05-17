<div class="home__row home__row--team" style="position: relative;">
    <div style="position: absolute; width: 100%; height: 100%;"  id="teamRow"></div>
    <div class="team">
        @foreach(\App\Models\User::query()->whereDisabled(false)->get() as $user)<div class="team__member-container">
            <div class="team__member">
                <div class="team__member__picture js-team-picture slow" id="team-{{$user->nickname}}">
                    <img class="team__member__picture__image" src="{{ $user->picture_or_default }}"/>
                    <div class="team__member__picture__border"></div>
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
                    @foreach($user->countries as $country)
                    <div class="team__member__language">
                        <img src="{{ $country->flag_rounded }}">
                    </div>
                    @endforeach
                </div>
                <div class="team__member__links">
                    @if($user->github_url)<a href="{{ $user->github_url }}" class="team__member__link" target="_blank" rel="nofollow noreferrer noopener"><i class="fab fa-github"></i></a>@endif
                    @if($user->website_url)<a href="{{ $user->website_url }}" class="team__member__link" target="_blank" rel="nofollow noreferrer noopener"><i class="fad fa-browser"></i></a>@endif
                </div>
                {{-- <div class="team__member__location">
                    <i class="fal fa-fw fa-location"></i> {{ $user->city->translated_name }}, {{ $user->city->country->translated_name }}
                </div>--}}
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

    <script>

        function animateCSS(element, animationName, callback) {
            const node = document.querySelector(element)
            node.classList.add('animated', animationName)

            console.log('test');

            function handleAnimationEnd() {
                node.classList.remove('animated', animationName)
                node.removeEventListener('animationend', handleAnimationEnd)

                if (typeof callback === 'function') callback()
            }

            node.addEventListener('animationend', handleAnimationEnd)
        }

        $('.js-team-picture').mouseenter(function () {
            let id = $(this).attr('id');
            console.log(id);
            animateCSS('#'+id,'wobble');
        });
    </script>
@endpush
