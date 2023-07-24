<?php

namespace App\Orchid\Screens\Article;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\ArticleSelectedTag;
use App\Models\ArticleTag;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
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
        $article->load(['tags']);
        $article->tags = $article->tags->pluck('name')->toArray();

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
            Button::make('Save article')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(! $this->article->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->article->exists),

            Button::make('Delete')
                ->icon('trash')
                ->confirm('Are you sure you want to delete this article?')
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
                    ->title('Excerpt')
                    ->rows(3)
                    ->placeholder('Brief description for preview')
                    ->maxlength(200)
                    ->required(),

                Select::make('article.author')
                    ->title('Author')
                    ->fromModel(User::class, 'name', 'id')
                    ->empty('none'),

                Select::make('article.category')
                    ->fromModel(ArticleCategory::class, 'name', 'name')
                    ->title('Select category')
                    ->help('Allow search bots to index')
                    ->required(),

                Select::make('article.tags')
                    ->fromModel(ArticleTag::class, 'name', 'name')
                    ->title('Select tags')
                    ->multiple()
                    ->required(),

                Quill::make('article.content')
                    ->title('Main text')
                    ->required(),

                Cropper::make('article.image')
                    ->title('Article image')
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
        $tags = $request->get('article')['tags'] ?? [];
        unset($this->article->tags);
        $this->article->fill(array_merge($request->get('article'), [
            'published_at' => $published_at,
            'slug' => $slug,
        ]))->save();

        foreach (ArticleSelectedTag::where('article_id', $this->article->id)->get() as $item) {
            $item->delete();
        }

        foreach ($tags as $item) {
            ArticleSelectedTag::create([
                'article_id' => $this->article->id,
                'name' => $item,
            ]);
        }

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

    /**
     * Permission
     */
    public function permission(): ?iterable
    {
        return [
            'articles.edit',
            'platform.systems.roles',
        ];
    }
}
