<div class="@if($type === 'hidden') hidden @else uk-margin-bottom blade-field-w @endif">
    <div class="blade-field">
        <input {!! $attributes->merge([
            'class' => 'uk-input'
        ]) !!}
               @if($isWired())
               wire:model="{{ $name }}"
               @else
               name="{{ $name }}"
               value="{{ $value }}"
               @endif

               type="{{ $type }}"/>
        <x-form-label :label="$label"/>
    </div>
    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name"/>
    @endif
</div>
