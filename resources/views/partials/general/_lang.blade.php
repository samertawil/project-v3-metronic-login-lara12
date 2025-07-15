
@php
$current = LaravelLocalization::getCurrentLocale();
@endphp


<div class="text-center w-100">

    @if ($current == 'en')
        <a rel="alternate" hreflang="ar"
            href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
            <span style="font-size: 12px;">{{  __('customTrans.ar') }} </span> </a> <small
            style="font-size: 12px;">{{ __('customTrans.langName') }}</small>
    @else
        <small style="font-size: 12px;">{{ __('customTrans.langName') }}</small>

        <a rel="alternate" hreflang="en"
            href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
            <span style="font-size: 12px;"> </small> {{  __('customTrans.en') }}</span> </a>
    @endif
</div>