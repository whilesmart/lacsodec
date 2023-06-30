<?php

namespace App\Orchid\Screens\ExpertProfile;

use App\Models\ExpertProfile;
use App\Orchid\Layouts\ExpertProfile\ExpertListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class ExpertProfileListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'experts' => ExpertProfile::paginate(),
        ];
    }

    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return 'Expert profiles';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return 'All expert profiles';
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
                ->route('platform.expert.edit'),
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
            ExpertListLayout::class,
        ];
    }
}
