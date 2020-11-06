<div {!! $attributes->merge(['class' => 'uk-margin-bottom blade-field-w']) !!}>
    <x-form-label :label="$label" />

    <div class="@if($label) uk-margin-small-top @endif @if($inline) uk-grid uk-grid-small uk-child-width-auto @endif" uk-grid>
        {!! $slot !!}
    </div>

    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>
