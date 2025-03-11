<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Icon extends Component
{
    public string $icon;

    public array $icons = [];

    const SVG_STYLES = [
        'green' => 'text-white group-hover:text-buttonGreen',
        'black' => 'text-white group-hover:text-buttonBlack',
        'grey' => 'text-buttonBlack',
        'colorGreentoWhite' => 'text-buttonGreen group-hover:text-white',
        'chevronIcon' => 'text-iconGrey group-hover:text-buttonBlack absolute group-hover:right-[44px] top-[34px] right-[34px] transition-all duration-500 ease-in-out',
    ];

    const SVG_ICONS = [
        'download' => 'arrow-down-to-line.svg',
        'chatSupport' => 'comment-smile.svg',
        'security' => 'shield-key.svg',
        'warehouse' => 'warehouse.svg',
        'house' => 'house-lock.svg',
        'chevron-right' => 'chevron-right.svg',
    ];
    public function __construct(
        ?string $icon = null,
    ) {
        $this->icon = $icon ?? 'empty';
    }

    public function getIcons()
    {
        $iconPath = self::SVG_ICONS[$this->icon] ?? null;
        if ($iconPath) {
            $this->icon = asset("resources/icons/{$iconPath}");
        } else {
            $this->icon = 'empty';
        }

    }

    public function render(): View|Closure|string
    {
        return view('components.icon');
    }
}


//finish component think shall i pass 1 icon or all, double-check