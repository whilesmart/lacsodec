<?php

namespace App\Orchid\Screens\Cso;

use App\Models\Cso;
use App\Orchid\Layouts\Cso\CsoListLayout;
use Orchid\Screen\Actions\Button;
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
            'csos' => Cso::paginate(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
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
            Link::make('Create new Cso')
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
        return response()->streamDownload(function () {
            $csos = Cso::all();
            $columnNames = ['id', 'name', 'assessment_score', 'status', 'acronym', 'registration_year', 'created_at'];

            $csv = tap(fopen('php://output', 'wb'), function ($csv) use ($columnNames) {
                fputcsv($csv, $columnNames);
            });

            $csos->each(function ($cso) use ($csv, $columnNames) {
                $row = array_intersect_key($cso->toArray(), array_flip($columnNames));
                fputcsv($csv, $row);
            });

            return tap($csv, function ($csv) {
                fclose($csv);
            });
        }, 'all_csos.csv');
    }
}
