<?php

namespace App\Orchid\Screens\ArticleTag;

use App\Models\ArticleTag;
use App\Orchid\Layouts\ArticleTag\ArticleTagListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class ArticleTagListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'articleTags' => ArticleTag::paginate(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return 'Article tags';
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
                ->route('platform.articletag.edit'),
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
            ArticleTagListLayout::class,
        ];
    }

    /**
     * Permission
     */
    public function permission(): ?iterable
    {
        return [
            'articles.list',
            'platform.systems.roles',
        ];
    }
}
