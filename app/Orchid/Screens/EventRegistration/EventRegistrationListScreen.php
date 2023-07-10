<?php

namespace App\Orchid\Screens\EventRegistration;

use App\Models\EventRegistration;
use App\Orchid\Layouts\EventRegistration\EventRegistrationListLayout;
use Orchid\Screen\Screen;

class EventRegistrationListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'eventRegistrations' => EventRegistration::paginate(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return 'Event Registrations';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            EventRegistrationListLayout::class,
        ];
    }
}
