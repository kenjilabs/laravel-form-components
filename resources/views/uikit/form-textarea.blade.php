<div class="uk-margin">
    <label class="block">
        <x-form-label :label="$label" />

        <textarea
            @if($isWired())
                wire:model="{{ $name }}"
            @else
                name="{{ $name }}"
            @endif

            {!! $attributes->merge(['class' => 'uk-textarea' . ($label ? 'mt-1' : '')]) !!}
        >@unless($isWired()){!! $value !!}@endunless</textarea>
    </label>

    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>
