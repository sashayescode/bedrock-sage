<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BenefitItem extends Component
{
    public string $icon;
    public string $header;
    public string $paragraph;
    public function __construct(
        ?string $icon = null,
        string $header = null,
        string $paragraph = null
    ) {
        $this->icon = $icon ?? null;
        $this->header = $header ?? null;
        $this->paragraph = $paragraph ?? null;
    }

    public function render(): View|Closure|string
    {
        return view(
            'components.benefit-item',
        );
    }
}
