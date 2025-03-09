@props(['header' => '', 'paragraph' => '', 'variant' => 'blue', 'buttonGreenText' => '', 'buttonTextBlack' => ''])

@php

    $variantImage = [
        'blue' => [
            'background' => 'bg-backgroundBabyBlue',
            'image' => 'blue',
            'phoneImagePosition' => 'left-[-24px] top-[-150px]',
            'phoneImage' => 'right',
        ],
        'pink' => [
            'background' => 'bg-roseBackground',
            'image' => 'pink',
            'phoneImagePosition' => 'left-[-24px] top-[-76px]',
            'phoneImage' => 'left',
            'containerReversed' => 'flex-row-reverse space-x-reverse',
        ],
    ];

@endphp

<div class="py-[120px] px-[50px] flex space-x-[19px] {{ $variant === 'pink' ? 'flex-row-reverse space-x-reverse' : '' }}">

    <div class="flex flex-col text-start">
        <div class="pt-[170px]">label</div>
        <h2 class="headingxl text-black mt-3 mb-5">{{ $header }}</h2>
        <p class="paragraphmd">{{ $paragraph }}</p>
        <div class="buttons flex space-x-2.5 mt-[26px]">
            <x-button icon="warehouse" buttonText="Button" color="green">{{ $buttonGreenText }}</x-button>
            <x-button icon="warehouse" buttonText="Button" color="black">{{ $buttonTextBlack }}</x-button>
        </div>
    </div>

    <div>
        <div class="px-[72px]">
            <div class="relative overflow-visible">

                <div class="w-[635px] h-[682px] {{ $variantImage[$variant]['background'] }} rounded-[20px]"></div>
                <img src="{{ get_template_directory_uri() }}/resources/images/vector-{{ $variantImage[$variant]['image'] }}.png"
                    class="absolute left-[-90px] top-[-50px] w-[724px] h-[800px] max-w-none max-h-none object-contain"
                    alt="Vector Blue">
                <img src="{{ get_template_directory_uri() }}/resources/images/phone-image-{{ $variantImage[$variant]['phoneImage'] }}.png"
                    class="absolute {{ $variantImage[$variant]['phoneImagePosition'] }} z-10">
            </div>
        </div>


    </div>
</div>
</div>
