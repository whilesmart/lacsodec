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
            TD::make('accomodation.name', 'Accomodation'),
            TD::make('accomodation.accommodation_number', 'Room number'),
            TD::make('name', 'User name'),
            TD::make('phone', 'User phone number'),
            TD::make('email', 'User email address'),
            TD::make('arrival', 'Arrival'),
            TD::make('departure', 'Departure'),
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
