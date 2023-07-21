<?php

namespace App\Orchid\Screens\ArticleTag;

use App\Models\ArticleTag;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class ArticleTagEditScreen extends Screen
{
    /**
     * @var ArticleTag
     */
    public $articleTag;

    /**
     * Query data.
     *
     *
     * @return array
     */
    public function query(ArticleTag $articleTag): iterable
    {
        return [
            'articleTag' => $articleTag,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return $this->articleTag->exists ? 'Edit article tag' : 'Creating a new article tag';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
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
            Button::make('Create article tag')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(! $this->articleTag->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->articleTag->exists),

            Button::make('Delete')
                ->icon('trash')
                ->method('delete')
                ->canSee($this->articleTag->exists),
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
                Input::make('articleTag.name')
                    ->title('Tag name')
                    ->required(),
            ]),
        ];
    }

    public function createOrUpdate(Request $request)
    {
        $this->articleTag->fill($request->get('articleTag'))->save();

        Alert::info('You have successfully created an article tag.');

        return redirect()->route('platform.articletag.list');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete()
    {
        $this->articleTag->delete();

        Alert::info('You have successfully deleted the article tag.');

        return redirect()->route('platform.articletag.list');
    }
}
