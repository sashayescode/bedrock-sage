@props(['icon' => 'warehouse', 'header' => '', 'paragraph' => ''])

<div class="group relative">
    <div
        class="group relative p-[38px] ease-out duration-700 transition-all border border-borderGrey rounded-[20px] group-hover:scale-y-[1.05]">
        <x-icon icon="chevron-right" color="chevronIcon"></x-icon>
        <div
            class="relative flex items-center justify-center size-[70px] mb-7 text-buttonGreen 
                transition-all duration-300 ease-out opacity-80 group-hover:opacity-100 
                group-hover:scale-110">

            <span
                class="absolute inset-0 flex justify-center items-center bg-buttonGreen z-0 rounded-full scale-0 transition-transform duration-700 ease-out origin-center group-hover:scale-100">
                <x-icon :icon="$icon" color="colorGreentoWhite"
                    class="relative z-10 transition-colors duration-300"></x-icon>
            </span>

            <x-icon :icon="$icon" color="colorGreentoWhite"
                class="relative z-10 transition-colors duration-300"></x-icon>
        </div>

        <p class="headingmd mb-2.5 text-nowrap sm:headingsm">{{ $header }}</p>
        <p class="paragraphmd text-iconGrey sm:paragraphsm">{{ $paragraph }}</p>
    </div>
</div>
