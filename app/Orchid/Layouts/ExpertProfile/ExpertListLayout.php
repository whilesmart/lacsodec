<?php

namespace App\Orchid\Layouts\ExpertProfile;

use App\Models\ExpertProfile;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ExpertListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'experts';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('user_id', 'User')->filter(),
            TD::make('status', 'Status')->filter(),
            TD::make('position', 'Position')->filter(),
            TD::make('created_at', 'Created'),
            TD::make('Actions')
                ->render(function (ExpertProfile $expert) {
                    return Link::make('edit')
                        ->icon('pencil')
                        ->route('platform.expert.edit', $expert);
                }),
        ];
    }
}
