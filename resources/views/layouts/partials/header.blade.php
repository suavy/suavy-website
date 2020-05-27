<div class="header">
    <div class="header__logo">
        <span><</span><span>be</span>Suavy<span>/></span>
    </div>
    <nav class="header__nav">
        <div class="header__nav__item">
            <div class="buttons-theme">
                <a href="{{ route('switch-theme', ['theme' => 'light']) }}" class="button-theme button-theme--light @if(!session('theme') || session('theme') == "light")) button-theme--selected @endif">
                    <i class="fad fa-sun"></i>
                </a><a href="{{ route('switch-theme', ['theme' => 'night']) }}" class="button-theme button-theme--night @if(session('theme') == "night")) button-theme--selected @endif">
                    <i class="fad fa-moon"></i>
                </a>
            </div>
        </div>
        <div class="header__nav__item">
            <div class="buttons-flag">
                <a href="{{ route('switch-locale', ['locale' => 'fr']) }}" class="button-flag @if(session('locale') == "fr") button-flag--selected @endif">
                    <img src="{{ asset('images/flags/square/fr.svg') }}"/>
                </a><a href="{{ route('switch-locale', ['locale' => 'pt']) }}" class="button-flag @if(session('locale') == "pt") button-flag--selected @endif">
                    <img src="{{ asset('images/flags/square/pt.svg') }}"/>
                </a><a href="{{ route('switch-locale', ['locale' => 'en']) }}" class="button-flag @if(session('locale') == "en") button-flag--selected @endif">
                    <img src="{{ asset('images/flags/square/uk.svg') }}"/>
                </a><!--<a href="{{ route('switch-locale', ['locale' => 'es']) }}" class="button-flag @if(session('locale') == "es") button-flag--selected @endif">
                <img src="{{ asset('images/flags/square/es.svg') }}"/>
            </a>-->
            </div>
        </div>
    </nav>
</div>
