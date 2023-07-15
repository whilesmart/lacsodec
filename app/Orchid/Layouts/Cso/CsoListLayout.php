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
            TD::make('image', 'Image')
                ->width(200)
                ->render(fn (Cso $cso) => "<img src=$cso->image alt=$cso->name class='mw-100 d-block img-fluid rounded-1 w-100'>"),
            TD::make('name', 'Name')->filter(),
            TD::make('created_at', 'Application date'),
            TD::make('Actions')
                ->render(function (Cso $cso) {
                    return Link::make('Edit CSO')
                        ->icon('pencil')
                        ->route('platform.cso.edit', $cso);
                }),
        ];
    }
}
