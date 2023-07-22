<?php

namespace App\Orchid\Screens\Cso;

use App\Models\Cso;
use App\Orchid\Layouts\Cso\CsoListLayout;
use App\Services\DataExportService;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class CsoListScreen extends Screen
{
    protected $dataExportService;

    public function __construct(DataExportService $dataExportService)
    {
        $this->dataExportService = $dataExportService;
    }

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'csos' => Cso::paginate(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return 'CSOs';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return 'All CSOs';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Create new CSO')
                ->icon('pencil')
                ->route('platform.cso.edit'),

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
            CsoListLayout::class,
        ];
    }

    public function export()
    {
        $csos = Cso::all();
        $columnNames = ['id', 'name', 'assessment_score', 'status', 'acronym', 'registration_year', 'created_at'];

        return $this->dataExportService->exportData($csos, $columnNames, 'all_csos');
    }

    /**
     * Permission
     */
    public function permission(): ?iterable
    {
        return [
            'csos.list',
            'platform.systems.roles',
        ];
    }
}
