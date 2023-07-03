<?php

namespace App\Orchid\Screens\Event;

use App\Models\Event;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class EventEditScreen extends Screen
{
    /**
     * @var Post
     */
    public $event;

    /**
     * Query data.
     *
     * @param  Post  $post
     */
    public function query(Event $event): array
    {
        return [
            'event' => $event,
        ];
    }

    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return $this->event->exists ? 'Edit event' : 'Creating a new event';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create event')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(! $this->event->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->event->exists),

            Button::make('Delete')
                ->icon('trash')
                ->method('delete')
                ->canSee($this->event->exists),
        ];
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return 'Event';
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
                Input::make('event.name')
                    ->title('Event name')
                    ->placeholder('Meetup')
                    ->required(),

                Select::make('event.type')
                    ->title('Event type')
                    ->options([
                        'event' => 'Event',
                        'training' => 'Training',
                    ])
                    ->required(),

                Select::make('event.entrance')
                    ->title('Event entrance fee')
                    ->options([
                        'free' => 'Free',
                        'paid' => 'Paid',
                        'sponsored' => 'Sponsored',
                    ])
                    ->required(),

                Input::make('event.url')
                    ->type('url')
                    ->title('Event website link')
                    ->required(),

                DateTimer::make('event.date')
                    ->title('Event date')
                    ->rows(3)
                    ->required(),
            ]),
        ];
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Request $request)
    {
        $this->event->fill(array_merge($request->get('event'), [
            'user_id' => $request->user()->id,
        ]))->save();

        Alert::info('You have successfully created an event.');

        return redirect()->route('platform.event.list');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete()
    {
        $this->event->delete();

        Alert::info('You have successfully deleted the event.');

        return redirect()->route('platform.event.list');
    }
}
