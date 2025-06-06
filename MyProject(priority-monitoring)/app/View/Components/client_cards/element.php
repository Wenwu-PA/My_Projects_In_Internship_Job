<?php

namespace App\View\Components\client_cards;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class element extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $src, public string $text)
    {
        

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.client_cards.element');
    }
}
