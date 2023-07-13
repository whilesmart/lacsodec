<?php

namespace App\Orchid\Screens\EventRegistration;

use App\Models\EventRegistration;
use App\Orchid\Layouts\EventRegistration\EventRegistrationListLayout;
use App\Services\DataExportService;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;

class EventRegistrationListScreen extends Screen
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
            'eventRegistrations' => EventRegistration::paginate(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return 'Event Registrations';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
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
            EventRegistrationListLayout::class,
        ];
    }

    public function export()
    {
        $eventRegistrations = EventRegistration::all();
        $columnNames = ['id', 'name', 'email', 'phone', 'sex', 'organization', 'country', 'other_details', 'created_at'];

        return $this->dataExportService->exportData($eventRegistrations, $columnNames, 'all_registrations');
    }
}
