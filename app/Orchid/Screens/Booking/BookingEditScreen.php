<?php

namespace App\Orchid\Screens\Booking;

use App\Models\Accomodation;
use App\Models\Booking;
use App\Models\ContactInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class BookingEditScreen extends Screen
{
    /**
     * @var Booking
     */
    public $booking;

    /**
     * Query data.
     *
     *
     * @return array
     */
    public function query(Booking $booking): iterable
    {
        return [
            'booking' => $booking,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return $this->booking->exists ? 'Edit booking' : 'Creating a new booking';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return 'Booking';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Send confirmation mail')
                ->icon('envelope')
                ->method('sendMail')
                ->canSee($this->booking->exists),

            Button::make('Save booking')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(! $this->booking->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->booking->exists),

            Button::make('Delete')
                ->icon('trash')
                ->method('delete')
                ->canSee($this->booking->exists),
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
            Layout::rows([
                Select::make('booking.accomodation_id')
                    ->fromModel(Accomodation::class, 'name', 'id')
                    ->title('Select accomodation')
                    ->required(),

                Input::make('booking.name')
                    ->title('User name')
                    ->required(),

                DateTimer::make('booking.arrival')
                    ->title('Arrival date')
                    ->rows(3)
                    ->required(),

                DateTimer::make('booking.departure')
                    ->title('Departure date')
                    ->rows(3)
                    ->required(),

                Input::make('booking.email')
                    ->title('User email')
                    ->type('email'),

                Input::make('booking.phone')
                    ->title('User phone number')
                    ->type('tel')
                    ->required(),

                Select::make('booking.cause')
                    ->title('Booking cause')
                    ->options([
                        'climate change' => 'Climate change',
                    ])
                    ->empty('none'),

                Select::make('booking.status')
                    ->title('Booking status')
                    ->options([
                        'pending' => 'Pending',
                        'confirmed' => 'Confirmed',
                    ])
                    ->required(),

            ]),
        ];
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Request $request)
    {
        $this->booking->fill($request->get('booking'))->save();

        Alert::info('You have successfully created a booking.');

        return redirect()->route('platform.booking.list');
    }

    public function sendMail(Request $request)
    {
        $this->booking->status = 'confirmed';
        $this->booking->save();

        $contactInfo = ContactInfo::first();
        $booking = $this->booking;

        Mail::send(
            'mail.booking-confirmation',
            [
                'name' => $this->booking->name,
                'lodge' => $this->booking->accomodation->name,
                'room' => $this->booking->accomodation->accommodation_number,
            ],
            function ($message) use ($contactInfo, $booking) {
                $message->from($contactInfo->listed_email_address);
                $message->to($booking['email'], $booking['name'])
                    ->subject('Booking confirmation');
            }
        );

        Alert::info('You have successfully sent a booking confirmation mail.');

        return redirect()->route('platform.booking.list');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete()
    {
        $this->booking->delete();

        Alert::info('You have successfully deleted the booking.');

        return redirect()->route('platform.booking.list');
    }

    /**
     * Permission
     */
    public function permission(): ?iterable
    {
        return [
            'bookings.edit',
            'platform.systems.roles',
        ];
    }
}
