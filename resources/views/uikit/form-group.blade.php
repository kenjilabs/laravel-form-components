<div {!! $attributes->merge(['class' => 'uk-margin']) !!}>
    <x-form-label :label="$label" />

    <div class="@if($label) uk-margin-small-top @endif @if($inline) uk-flex uk-flex-wrap @endif">
        {!! $slot !!}
    </div>

    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>
