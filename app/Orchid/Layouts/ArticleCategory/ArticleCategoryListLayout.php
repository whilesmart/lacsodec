<?php

namespace App\Orchid\Layouts\ArticleCategory;

use App\Models\ArticleCategory;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ArticleCategoryListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'articleCategories';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('name', 'Name'),
            TD::make('Actions')
                ->alignRight()
                ->render(function (ArticleCategory $articleCategory) {
                    return Link::make('Edit')
                        ->icon('pencil')
                        ->route('platform.articlecategory.edit', $articleCategory);
                }),
        ];
    }
}
