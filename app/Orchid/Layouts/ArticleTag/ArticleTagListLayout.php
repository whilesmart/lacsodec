<?php

namespace App\Orchid\Layouts\ArticleTag;

use App\Models\ArticleTag;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ArticleTagListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'articleTags';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('name', 'Name')->filter(),
            TD::make('Actions')
                ->alignRight()
                ->render(function (ArticleTag $articleTag) {
                    return Link::make('Edit')
                        ->icon('pencil')
                        ->route('platform.articletag.edit', $articleTag);
                }),
        ];
    }
}
