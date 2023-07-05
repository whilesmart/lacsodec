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
    public $contactInfo;

    public function __construct(?ContactInfo $contactInfo = null)
    {
        $this->contactInfo = $contactInfo ?: new ContactInfo([
            'form_email_address' => 'info@lacsodec.org',
            'listed_email_address' => 'info@lacsodec.org',
            'phone_number' => '+237677947449',
            'location' => 'NGO Street, Molyko - Buea',
        ]);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contact');
    }
}
