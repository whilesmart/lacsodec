<?php

namespace App\Orchid\Screens\HumanResource;

use App\Models\ExpertProfile;
use App\Orchid\Layouts\ExpertProfile\ExpertListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class HumanResourceListScreen extends Screen
{
    /**
     * Query data.
     */
    public function query(): array
    {
        return [
            'experts' => ExpertProfile::where('isHumanResource', true)->paginate(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return 'Human Resource List';
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
