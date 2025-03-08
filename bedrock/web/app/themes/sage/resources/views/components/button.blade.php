@props(['buttonText' => 'Default', 'color' => 'green', 'icon'=>'warehouse'])

@php

$stylesButton = [
    'green'=>'bg-buttonGreen text-white hover:bg-transparent hover:border-2 hover:border-buttonGrey hover:text-buttonGreen',
    'black'=>'bg-buttonBlack text-white hover:bg-transparent hover:border-2 hover:border-buttonBlack hover:text-buttonBlack',
    'grey'=>'bg-white border-2 border-buttonGrey text-buttonBlack hover:bg-buttonGrey'
];

@endphp

<div class="w-fit">
    <button type="button" class="w-[142px] h-[60px] rounded-[30px] group flex items-center justify-center py-5 px-7 space-x-3.5 {{ $stylesButton[$color] ?? $stylesButton['green'] }}">
        <x-icon :icon="$icon" :color="$color"></x-icon>
        <p class="elementText">{{ $buttonText }}</p>
    </button>
</div>
