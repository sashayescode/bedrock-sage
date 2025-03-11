@props(['header', 'paragraph', 'variant', 'variantImage', 'buttonRightText', 'buttonLeftText'])

<div
    class="py-[120px] flex space-x-[19px] {{ $variant === 'pink' ? 'flex-row-reverse space-x-reverse my-wrapper' : '' }}">

    <div class="flex flex-col text-start text-wrap">
        <div class="pt-[170px]">
            <x-label></x-label>
        </div>
        <h2 class="headingxl text-black mt-3 mb-5">{{ $header }}</h2>
        <p class="paragraphmd">{{ $paragraph }}</p>
        <div class="buttons flex space-x-2.5 mt-[26px]">
            <x-button buttonText="Button" color="green" icon="house">{{ $buttonRightText }}</x-button>
            <x-button buttonText="Button" color="black" icon="house">{{ $buttonLeftText }}</x-button>
        </div>
    </div>

    <div>
        <div class="{{ $variant === 'pink' ? 'pr-[90px] pl-[0]' : 'pl-[90px] pr-[0]' }}">
            <div class="relative overflow-visible">

                <div class="w-[635px] h-[682px] {{ $variantImage['background'] }} rounded-[20px]"></div>
                <img src="{{ get_template_directory_uri() }}/resources/images/vector-{{ $variantImage['image'] }}.png"
                    class="absolute left-[-90px] top-[-50px] w-[724px] h-[800px] max-w-none max-h-none object-contain"
                    alt="Vector Blue">
                <img src="{{ get_template_directory_uri() }}/resources/images/phone-image-{{ $variantImage['phoneImage'] }}.png"
                    class="absolute {{ $variantImage['phoneImagePosition'] }} z-10">
            </div>
        </div>
    </div>
</div>
</div>
