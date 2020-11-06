<div>
     <label class="{{$attributes->get('data-label-class')?'blade-field-radio-button':''}}">
        <input {!! $attributes->except(['data-label-class'])->merge(['class' => 'uk-radio']) !!}
            type="radio"

            @if($isWired())
                wire:model="{{ $name }}"
            @else
                name="{{ $name }}"
            @endif

            value="{{ $value }}"

            @if($checked)
                checked="checked"
            @endif
        />

        <span class="{{$attributes->get('data-label-class')}}">{!! $label !!}</span>
    </label>

    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>
