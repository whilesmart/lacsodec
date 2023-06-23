<?php

namespace App\Orchid\Screens\Cso;

use App\Models\Cso;
use App\Orchid\Layouts\Cso\CsoListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class CsoListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'csos' => Cso::paginate()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Csos';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "All CSOs";
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Create new Cso')
                ->icon('pencil')
                ->route('platform.cso.edit')
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
            CsoListLayout::class
        ];
    }
}
