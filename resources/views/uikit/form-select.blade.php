<div class="uk-margin">
    <label>
        <x-form-label :label="$label" />

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
                'class' => ($label ? 'uk-margin-small-top' : '') . ' uk-select ' . ($multiple ? 'multiselect' : '')
            ]) !!}>
            @forelse($options as $key => $option)
                <option value="{{ $key }}" @if($isSelected($key)) selected="selected" @endif>
                    {{ $option }}
                </option>
            @empty
                {!! $slot !!}
            @endforelse
        </select>
    </label>

    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>
