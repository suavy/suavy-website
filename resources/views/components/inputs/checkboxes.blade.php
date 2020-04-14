<div class="form-group">
    <label class="label">{{ $label }}</label>
    <div class="checkboxes">
    @foreach($options as $key => $option)
        <x-inputs.checkbox :name="$name" :label="$option" :value="$key"/>
    @endforeach
    </div>
</div>
