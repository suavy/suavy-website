<div class="form-container">
    <form class="form" action="{{ $link }}" method="POST">
        @csrf
        {{ $slot }}
        <input type="submit" value="Votre projet démarre maintenant">
    </form>
</div>

