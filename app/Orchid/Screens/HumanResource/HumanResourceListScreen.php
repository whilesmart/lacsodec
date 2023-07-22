<?php

namespace App\Orchid\Screens\HumanResource;

use App\Models\ExpertProfile;
use App\Orchid\Layouts\ExpertProfile\ExpertListLayout;
use App\Services\DataExportService;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class HumanResourceListScreen extends Screen
{
    protected $dataExportService;

    public function __construct(DataExportService $dataExportService)
    {
        $this->dataExportService = $dataExportService;
    }

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

            Button::make('Export')
                ->icon('bs.download')
                ->method('export')
                ->rawClick(),
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

    public function export()
    {
        $experts = ExpertProfile::with('user')->where('isHumanResource', true)->get();
        $columnNames = ['user_id', 'status', 'details', 'birthday', 'sex', 'birth_place', 'phone_number', 'created_at'];

        return $this->dataExportService->exportData($experts, $columnNames, 'all_humanresources');
    }

    /**
     * Permission
     */
    public function permission(): ?iterable
    {
        return [
            'experts.list',
            'platform.systems.roles',
        ];
    }
}
