<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Numbers extends Component
{
    /**
     * Create a new component instance.
     */
    public $members;

    public $csos;

    public $events;

    public $trainings;

    public function __construct($members = 0, $csos = 0, $events = 0, $trainings = 0)
    {
        $this->members = $members;
        $this->csos = $csos;
        $this->events = $events;
        $this->trainings = $trainings;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.numbers');
    }
}
