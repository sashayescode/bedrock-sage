@props(['icon', 'text'])

<div
    class="flex bg-white space-x-2 items-center justify-center border border-borderGrey rounded-[30px] py-2.5 px-5 w-fit">
    <x-icon :icon="$icon"></x-icon>
    <p class="paragraphsm">{{ $text }}</p>

</div>
