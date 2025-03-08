@props(['icon' => 'warehouse', 'color' => 'green'])

@php

    $svgStyles = [
    'green'=>'text-white group-hover:text-buttonGreen',
    'black'=>'text-white group-hover:text-buttonBlack',
    'grey'=>'text-buttonBlack',
    'colorGreentoWhite'=>'text-buttonGreen group-hover:text-white'

];

    $svgIcons = [
        'download' => '../icons/arrow-down-to-line.svg',
        'chatSupport' => '../icons/comment-smile.svg',
        'security' => '../icons/shield-key.svg',
        'warehouse' => '../icons/warehouse.svg',
    ];

@endphp

    @php
        $iconPath = resource_path('views/' . $svgIcons[$icon] ?? $svgIcons['warehouse']);
        $iconSvg = file_exists($iconPath) ? file_get_contents($iconPath) : null;
    @endphp

    @if ($iconSvg)
        <div class="{{ $svgStyles[$color] ?? $svgStyles['green'] }} w-6 h-6 flex">{!! $iconSvg !!}</div>
    @else
        <div>Icon not found</div>
    @endif
