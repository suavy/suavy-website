<div class="home__row team">
    @foreach(\App\Models\User::all() as $user)
        <div class="team__member">
            <div class="team__member__photo">
                <img src="https://picsum.photos/60" />
            </div>
            <div class="team__member__name">
                {{ $user->firstname }}<br/>
            </div>
            <div class="team__member__location">
                <i class="far fa-map-marker-alt"></i> Paris, France
            </div>
            <div class="team__member__role">
                Project Lead
            </div>
            <div class="team__member__icons">
                <a href="#"><i class="fab fa-github"></i></a>
            </div>
        </div>
    @endforeach
</div>
