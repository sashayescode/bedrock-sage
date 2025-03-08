@props(['icon'=>'warehouse', 'header'=>'', 'paragraph'=>''])

<div class="group">
    <div class=" duration-200 ease-out transform group-hover:scale-110 group-hover:opacity-100 opacity-80 transition-all rounded-full size-[70px] bg-backgroundMint flex items-center justify-center text-buttonGreen group-hover:bg-buttonGreen mb-7">
        <x-icon :icon="$icon" color="colorGreentoWhite"></x-icon>
    </div>
    <p class="headingmd mb-2.5">{{ $header }}</p>
    <p class="paragraphmd"> {{ $paragraph }}</p>
</div>