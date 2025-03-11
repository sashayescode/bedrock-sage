<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public string $buttonText;
    public string $color;
    public string $icon;
    public string $styleButton;
    public string $styleHover;

    const STYLES_BUTTON = [
        'green' => 'bg-buttonGreen text-white hover:text-buttonGreen',
        'black' => 'bg-buttonBlack text-white hover:text-buttonBlack',
        'grey' => 'bg-none border-2 border-buttonGrey text-buttonBlack',
    ];

    const STYLES_HOVER = [
        'green' => 'bg-white border-2 border-buttonGrey text-buttonGreen',
        'black' => 'bg-white border-2 border-buttonGrey',
        'grey' => 'bg-buttonGrey border-2 border-buttonGrey',
    ];

    public function __construct(
        ?string $buttonText = null,
        ?string $color = null,
        ?string $icon = null
    ) {
        $this->buttonText = $buttonText ?? 'Default';
        $this->color = $color ?? 'green';
        $this->icon = $icon ?? 'warehouse';
        $this->styleButton = self::STYLES_BUTTON[$color] ?? self::STYLES_BUTTON['green'];
        $this->styleHover = self::STYLES_HOVER[$color] ?? self::STYLES_HOVER['black'];

    }


    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
