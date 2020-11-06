<div class="uk-margin-bottom blade-field-w">
    <div class="blade-field">
        <select
            @if($isWired())
            wire:model="{{ $name }}"
            @else
            name="{{ $name }}"
            @endif

            @if($multiple)
            multiple
            @endif

            {!! $attributes->merge([
                'class' =>' uk-select ' . ($multiple ? 'multiselect' : '')
            ]) !!}>
            @forelse($options as $key => $option)
                <option value="{{ $key }}" @if($isSelected($key)) selected="selected" @endif>
                    {{ $option }}
                </option>
            @empty
                {!! $slot !!}
            @endforelse
        </select>
        <x-form-label :label="$label"/>

    </div>

    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name"/>
    @endif
</div>
