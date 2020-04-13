<div class="form-group">
    <label class="label">{{ $label }}</label>
    @foreach($params['options'] as $option)
        <x-inputs.checkbox name="{{ $name }}[]" label="Label here"/>
    @endforeach
</div>
