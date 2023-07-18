<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class LatestCso extends Component
{
    /**
     * Create a new component instance.
     */
    public $csos;

    public function __construct(Collection $csos)
    {
        $this->csos = $csos;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.latest-cso');
    }
}
