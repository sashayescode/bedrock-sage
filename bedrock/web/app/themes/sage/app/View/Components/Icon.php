<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Icon extends Component
{
    public string $icon;
    public string $color;

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
        ?string $color = null
    ) {
        $this->icon = $icon ?? '';
        $this->color = isset(self::SVG_STYLES[$color]) ? $color : 'green';
    }

    protected function getIconPath(): ?string
    {
        $iconFile = self::SVG_ICONS[$this->icon] ?? null;
        if (!$iconFile) {
            return null;
        }

        $iconPath = resource_path('icons/' . $iconFile);

        return file_exists($iconPath) ? file_get_contents($iconPath) : null;
    }

    protected function getIconStyle(): string
    {
        return self::SVG_STYLES[$this->color] ?? self::SVG_STYLES['green'];
    }


    public function render(): View|Closure|string
    {
        return view('components.icon', [
            'iconSvg' => $this->getIconPath(),
            'stylingSvg' => $this->getIconStyle(),
        ]);
    }
}