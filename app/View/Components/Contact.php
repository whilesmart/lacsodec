<?php

namespace App\View\Components;

use App\Models\ContactInfo;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Contact extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public ContactInfo $contactInfo)
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contact');
    }
}
