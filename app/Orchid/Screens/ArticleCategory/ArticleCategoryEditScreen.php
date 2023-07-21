<?php

namespace App\Orchid\Screens\ArticleCategory;

use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class ArticleCategoryEditScreen extends Screen
{
    /**
     * @var ArticleCategory
     */
    public $articleCategory;

    /**
     * Query data.
     */
    public function query(ArticleCategory $articleCategory): array
    {
        return [
            'articleCategory' => $articleCategory,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return $this->articleCategory->exists ? 'Edit article category' : 'Creating a new article category';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create article category')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(! $this->articleCategory->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->articleCategory->exists),

            Button::make('Delete')
                ->icon('trash')
                ->method('delete')
                ->canSee($this->articleCategory->exists),
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
            Layout::rows([
                Input::make('articleCategory.name')
                    ->title('Tag name')
                    ->required(),
            ]),
        ];
    }

    public function createOrUpdate(Request $request)
    {
        $this->articleCategory->fill($request->get('articleCategory'))->save();

        Alert::info('You have successfully created an article category.');

        return redirect()->route('platform.articlecategory.list');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete()
    {
        $this->articleCategory->delete();

        Alert::info('You have successfully deleted the article category.');

        return redirect()->route('platform.articlecategory.list');
    }
}
