@props(['icon' => null, 'color' => 'green'])

@php
    $svgStyles = [
        'green' => 'text-white group-hover:text-buttonGreen',
        'black' => 'text-white group-hover:text-buttonBlack',
        'grey' => 'text-buttonBlack',
        'colorGreentoWhite' => 'text-buttonGreen group-hover:text-white',
        'chevronIcon' => 'text-iconGrey group-hover:text-buttonBlack absolute group-hover:right-[44px] top-[34px] right-[34px] transition-all duration-500 ease-in-out',
    ];

    $svgIcons = [
        'download' => '../icons/arrow-down-to-line.svg',
        'chatSupport' => '../icons/comment-smile.svg',
        'security' => '../icons/shield-key.svg',
        'warehouse' => '../icons/warehouse.svg',
        'house' => '../icons/house-lock.svg',
        'chevron-right' => '../icons/chevron-right.svg',
    ];

    $iconPath = $icon && isset($svgIcons[$icon]) ? resource_path('views/' . $svgIcons[$icon]) : null;
    $iconSvg = $iconPath && file_exists($iconPath) ? file_get_contents($iconPath) : null;
@endphp

@if ($iconSvg)
    <div class="{{ $svgStyles[$color] ?? $svgStyles['green'] }} w-6 h-6 flex">
        {!! $iconSvg !!}
    </div>
@else
    <div class="bg-buttonGreen rounded-full size-3"></div>
@endif
