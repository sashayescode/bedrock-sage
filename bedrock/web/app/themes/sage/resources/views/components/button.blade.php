@props(['buttonText' => 'Default', 'color' => 'green', 'icon'=>'warehouse'])

@php

$stylesButton = [
    'green'=>'bg-buttonGreen text-white hover:bg-transparent hover:border-2 hover:border-buttonGrey hover:text-buttonGreen',
    'black'=>'bg-buttonBlack text-white hover:bg-transparent hover:border-2 hover:border-buttonBlack hover:text-buttonBlack',
    'grey'=>'bg-none border-2 border-buttonGrey text-buttonBlack hover:bg-buttonGrey'
];

$stylesHover = [
    'green'=> 'bg-transparent border-2 border-buttonGrey text-buttonGreen'
]

@endphp

<div class="relative w-fit group">
    <!-- First button (Main button with hidden overflow) -->
    <button type="button" class="relative transition-all duration-700 ease-out overflow-hidden w-min-[142px] h-[60px] rounded-[30px] flex items-center justify-center py-5 px-7 space-x-3.5 {{ $stylesButton[$color] ?? $stylesButton['green'] }}">
        <x-icon class="z-10" :icon="$icon" :color="$color"></x-icon>
        <p class="elementText text-nowrap z-10">{{ $buttonText }}</p>

        <!-- White overlay that moves up -->
        <div class="absolute rounded-[30px] bottom-[-100%] left-0 w-full h-full bg-white transition-all duration-700 ease-out group-hover:bottom-0"></div>

        <!-- Green overlay following the white one -->
    </button>
</div>


