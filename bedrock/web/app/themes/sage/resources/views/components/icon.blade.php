@props(['iconSvg', 'stylingSvg'])

@if ($iconSvg)
    <div class="{{ $stylingSvg }} w-6 h-6 flex">
        {!! $iconSvg !!}
    </div>
@else
    <div class="bg-buttonGreen rounded-full size-3"></div>
@endif
