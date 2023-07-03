<?php

namespace App\Orchid\Layouts\Event;

use App\Models\Event;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class EventListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'events';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('name', 'Name'),
            TD::make('type', 'Type'),
            TD::make('entrance', 'Entrance'),
            TD::make('created_at', 'Created'),
            TD::make('Actions')
                ->render(function (Event $event) {
                    return Link::make('Edit event')
                        ->icon('pencil')
                        ->route('platform.event.edit', $event);
                }),
        ];
    }
}
