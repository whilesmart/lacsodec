<?php

namespace App\Orchid\Layouts\Cso;

use App\Models\Cso;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CsoListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'csos';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('name', 'Name'),
            TD::make('location', 'Location'),
            TD::make('created_at', 'Created'),
            TD::make('updated_at', 'Last edit'),
            TD::make('Actions')
                ->render(function (Cso $cso) {
                    return Link::make('Edit CSO')
                        ->icon('pencil')
                        ->route('platform.cso.edit', $cso);
                }),
        ];
    }
}
