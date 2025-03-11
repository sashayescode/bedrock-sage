@props(['buttonText', 'color', 'icon', 'styleButton', 'styleHover'])

<div class="relative w-fit group">
    <button type="button"
        class="relative transition-all duration-700 ease-out overflow-hidden w-min-[142px] h-[60px] rounded-[30px] flex items-center justify-center py-5 px-7 space-x-3.5 {{ $styleButton }}">
        <x-icon class="z-10" :icon="$icon" :color="$color"></x-icon>
        <p class="elementText text-nowrap z-10">{{ $buttonText }}</p>

        <div
            class="absolute rounded-[30px] bottom-[-100%] left-0 w-full h-full {{ $styleHover }} transition-all duration-700 ease-out group-hover:bottom-0">
        </div>

    </button>
</div>
