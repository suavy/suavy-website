<div class="team">
    @foreach(\App\Models\User::all() as $user)<div class="team__member-container">
        <div class="team__member">
            <div class="team__member__picture">
                <img src="https://picsum.photos/200"/>
            </div>
            <div class="team__member__name">
                {{ $user->firstname }} <span>{{ '@'.$user->nickname }}</span>
            </div>
            <div class="team__member__role">
                {{ $user->role }}
            </div>
        </div>
    </div>@endforeach
</div>
