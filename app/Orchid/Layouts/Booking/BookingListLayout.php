<?php

namespace App\Orchid\Layouts\Booking;

use App\Models\Booking;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class BookingListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'bookings';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('accomodation.name', 'Accommodation')->filter(),
            TD::make('accomodation.accommodation_number', 'Room number'),
            TD::make('name', 'User name')->filter(),
            TD::make('phone', 'User phone number')->filter(),
            TD::make('email', 'User email address')->filter(),
            TD::make('arrival', 'Arrival')->filter(),
            TD::make('departure', 'Departure')->filter(),
            TD::make('created_at', 'Created'),
            TD::make('Actions')
                ->alignRight()
                ->render(function (Booking $booking) {
                    return Link::make('Edit')
                        ->icon('pencil')
                        ->route('platform.booking.edit', $booking);
                }),
        ];
    }
}
