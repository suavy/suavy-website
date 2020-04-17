<div class="form-container">
    <form class="form" action="{{ $link }}" method="POST" id="{{$id}}">
        @csrf
        {{ $slot }}
    </form>
</div>

