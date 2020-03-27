<div class="header">
    <div class="header__logo">
        beSuavy
    </div>
    <nav>
        <div class="buttons-theme">
            <a href="{{ route('switch-theme', ['theme' => 'light']) }}" class="button-theme button-theme--light @if(!session('theme') || session('theme') == "light")) button-theme--selected @endif">
                <i class="fad fa-sun"></i>
            </a><a href="{{ route('switch-theme', ['theme' => 'night']) }}" class="button-theme button-theme--night @if(session('theme') == "night")) button-theme--selected @endif">
                <i class="fad fa-moon"></i>
            </a>
        </div>
        <div class="buttons-flag">
            <a href="{{ route('switch-locale', ['locale' => 'fr']) }}" class="button-flag @if(session('locale') == "fr") button-flag--selected @endif">
                <img src="{{ asset('images/flags/fr.svg') }}"/>
            </a><a href="{{ route('switch-locale', ['locale' => 'pt']) }}" class="button-flag @if(session('locale') == "pt") button-flag--selected @endif">
                <img src="{{ asset('images/flags/pt.svg') }}"/>
            </a><a href="{{ route('switch-locale', ['locale' => 'en']) }}" class="button-flag @if(session('locale') == "en") button-flag--selected @endif">
                <img src="{{ asset('images/flags/en.svg') }}"/>
            </a><!--<a href="{{ route('switch-locale', ['locale' => 'es']) }}" class="button-flag @if(session('locale') == "es") button-flag--selected @endif">
                <img src="{{ asset('images/flags/es.svg') }}"/>
            </a>-->
        </div>
    </nav>
</div>
