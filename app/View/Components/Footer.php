<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $logoBlack,
        public string $updatedAt,
        public string $footerDesc,
        public string $phone,
        public string $formattedPhone,
        public string $email,
        public string $youtube,
        public string $instagram,
        public string $twitter,
    )
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.footer');
    }
}
