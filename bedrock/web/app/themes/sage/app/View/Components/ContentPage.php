<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContentPage extends Component
{
    public string $header;
    public string $paragraph;
    public string $variant;
    public array $variantImage;
    public string $buttonRightText;
    public string $buttonLeftText;

    const VARIANT_IMAGES = [
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
        ],
    ];

    const IMAGES_URL = [
        'phone_right'=> 'http://lyfter-garage-opener.test/app/uploads/2025/03/phone-image-right.png',
        'phone_left'=> 'http://lyfter-garage-opener.test/app/uploads/2025/03/phone-image-left.png',
        'vector-blue' => 'http://lyfter-garage-opener.test/app/uploads/2025/03/vector-blue.png',
        'vector-pink' => 'http://lyfter-garage-opener.test/app/uploads/2025/03/vector-pink.png',
    ];

    public function __construct(
        ?string $header = null,
        ?string $paragraph = null,
        ?string $variant = 'blue', 
        ?string $buttonRightText = 'Button', 
        ?string $buttonLeftText = 'Button'
    ) {
        $this->header = $header ?? 'This is a big header';
        $this->paragraph = $paragraph ?? 'This is a paragraph';
        $this->variant = $variant;
        $this->buttonRightText = $buttonRightText;
        $this->buttonLeftText = $buttonLeftText;

        $this->variantImage = self::VARIANT_IMAGES[$variant] ?? self::VARIANT_IMAGES['blue'];
    }

    public function render(): View|Closure|string
    {
        return view('components.content-page');
    }
}

