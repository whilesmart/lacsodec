<?php

namespace App\Orchid\Layouts\Article;

use App\Models\Article;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ArticleListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'articles';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('title', 'Title')->filter(),
            TD::make('category', 'Category')->filter(),
            TD::make('created_at', 'Created'),
            TD::make('updated_at', 'Last edit'),
            TD::make('Actions')
                ->alignRight()
                ->render(function (Article $article) {
                    return Link::make('Edit')
                        ->icon('pencil')
                        ->route('platform.article.edit', $article);
                }),
        ];
    }
}
