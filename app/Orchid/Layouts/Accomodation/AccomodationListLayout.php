<?php

namespace App\Orchid\Layouts\Accomodation;

use App\Models\Accomodation;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class AccomodationListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'accomodations';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('name', 'Name'),
            TD::make('city', 'City'),
            TD::make('quarter', 'Quarter'),
            TD::make('floor_number', 'Floor number'),
            TD::make('price', 'Price per night'),
            TD::make('created_at', 'Created'),
            TD::make('Actions')
                ->render(function (Accomodation $accomodation) {
                    return Link::make('Edit accomodation')
                        ->icon('pencil')
                        ->route('platform.accomodation.edit', $accomodation);
                }),
        ];

    }
}
