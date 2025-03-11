<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Label extends Component
{
    public string $icon;
    public string $text;
    public function __construct(
        ?string $icon = null,
        ?string $text = null,
    ) {
        $this->icon = $icon ?? 'empty';
        $this->text = $text ?? 'Label';
    }

    public function render(): View|Closure|string
    {
        return view('components.label');
    }
}
