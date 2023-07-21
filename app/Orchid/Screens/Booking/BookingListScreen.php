<?php

namespace App\Orchid\Screens\Booking;

use App\Models\Booking;
use App\Orchid\Layouts\Booking\BookingListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class BookingListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'bookings' => Booking::paginate(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return 'Bookings';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make('Create new')
                ->icon('pencil')
                ->route('platform.booking.edit'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            BookingListLayout::class,
        ];
    }

    /**
     * Permission
     */
    public function permission(): ?iterable
    {
        return [
            'bookings.list',
            'platform.systems.roles',
        ];
    }
}
