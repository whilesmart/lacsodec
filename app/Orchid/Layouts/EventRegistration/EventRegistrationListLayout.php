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
            TD::make('event.name', 'Event')->filter(),
            TD::make('name', 'Name')->filter(),
            TD::make('email', 'Email address')->filter(),
            TD::make('phone', 'Phone number')->filter(),
            TD::make('sex', 'Sex'),
            TD::make('organization', 'Organization')->filter(),
            TD::make('country', 'Country')->filter(),
            TD::make('other_details', 'Motivation'),
            TD::make('created_at', 'Created'),
        ];
    }
}
