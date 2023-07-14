<?php

namespace App\Orchid\Screens\Article;

use App\Models\Article;
use App\Models\ArticleTag;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class ArticleEditScreen extends Screen
{
    /**
     * @var Article
     */
    public $article;

    /**
     * Query data.
     *
     *
     * @return array
     */
    public function query(Article $article): iterable
    {
        return [
            'article' => $article,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return $this->article->exists ? 'Edit Article' : 'Creating a new Article';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create article')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(! $this->article->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->article->exists),

            Button::make('Delete')
                ->icon('trash')
                ->method('delete')
                ->canSee($this->article->exists),
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
                Input::make('article.title')
                    ->title('Title')
                    ->placeholder('Attractive title')
                    ->help('Specify a short descriptive title for this post.')
                    ->required(),

                TextArea::make('article.description')
                    ->title('Description')
                    ->rows(3)
                    ->placeholder('Brief description for preview')
                    ->required(),

                Relation::make('article.author')
                    ->title('Author')
                    ->fromModel(User::class, 'name', 'id')
                    ->empty('none'),

                Select::make('article.category')
                    ->fromModel(ArticleTag::class, 'name', 'name')
                    ->title('Select tags')
                    ->help('Allow search bots to index')
                    ->required(),

                Quill::make('article.content')
                    ->title('Main text')
                    ->required(),

                Cropper::make('article.image')
                    ->title('Article image')
                    ->width(400)
                    ->height(400)
                    ->required(),
            ]),
        ];
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Request $request)
    {
        $slug = $this->article->exists ? $this->article->slug : Str::slug($request->article['title']);
        $published_at = $this->article->exists ? $this->article->published_at : Carbon::now();
        $this->article->fill(array_merge($request->get('article'), [
            'published_at' => $published_at,
            'slug' => $slug,
        ]))->save();

        Alert::info('You have successfully created an article.');

        return redirect()->route('platform.article.list');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete()
    {
        $this->article->delete();

        Alert::info('You have successfully deleted the article.');

        return redirect()->route('platform.article.list');
    }
}
