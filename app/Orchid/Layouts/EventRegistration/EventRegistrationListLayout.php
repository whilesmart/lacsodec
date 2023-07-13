<?php

namespace App\Orchid\Layouts\EventRegistration;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class EventRegistrationListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'eventRegistrations';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('event.name', 'Event'),
            TD::make('name', 'Name'),
            TD::make('email', 'Email address'),
            TD::make('phone', 'Phone number'),
            TD::make('sex', 'Sex'),
            TD::make('organization', 'Organization'),
            TD::make('country', 'Country'),
            TD::make('other_details', 'Motivation'),
            TD::make('created_at', 'Created'),
        ];
    }
}
