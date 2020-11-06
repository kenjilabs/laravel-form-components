<div >
    <label >
        <input {!! $attributes->merge(['class' => 'uk-checkbox']) !!}
            type="checkbox"
            value="{{ $value }}"

            @if($isWired())
                wire:model="{{ $name }}"
            @else
                name="{{ $name }}"
            @endif

            @if($checked)
                checked="checked"
            @endif
        />

        <span class="uk-margin-small-left">{{ $label }}</span>
    </label>

    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>
