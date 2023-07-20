<?php

namespace App\Orchid\Screens\ArticleCategory;

use App\Models\ArticleCategory;
use App\Orchid\Layouts\ArticleCategory\ArticleCategoryListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class ArticleCategoryListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'articleCategories' => ArticleCategory::paginate(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return 'ArticleCategoryListScreen';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Create new')
                ->icon('pencil')
                ->route('platform.articlecategory.edit'),
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
            ArticleCategoryListLayout::class,
        ];
    }
}
