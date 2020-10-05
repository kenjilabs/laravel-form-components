<div class="mt-6 flex items-center justify-between">
    <button {!! $attributes->merge([
        'class' => 'uk-button uk-button-default',
        'type' => 'submit'
    ]) !!}>
        {!! trim($slot) ?: __('Submit') !!}
    </button>
</div>
