<div class="@if($type === 'hidden') hidden @else uk-margin @endif">
    <label>
        <x-form-label :label="$label" />

        <input {!! $attributes->merge([
            'class' => 'uk-input' . ($label ? 'uk-margin-small-top' : '')
        ]) !!}
            @if($isWired())
                wire:model="{{ $name }}"
            @else
                name="{{ $name }}"
                value="{{ $value }}"
            @endif

            type="{{ $type }}" />
    </label>

    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>
