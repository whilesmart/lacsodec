<?php

namespace App\Orchid\Screens\Accomodation;

use App\Models\Accomodation;
use App\Models\AccomodationEquipment;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class AccomodationEditScreen extends Screen
{
    /**
     * @var Accomodation
     */
    public $accomodation;

    /**
     * Query data.
     */
    public function query(Accomodation $accomodation): array
    {
        $accomodation->load(['attachment', 'equipment']);
        $accomodation->equipment = $accomodation->equipment->pluck('name')->toArray();

        return [
            'accomodation' => $accomodation,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return $this->accomodation->exists ? 'Edit Accomodation' : 'Creating a new accomodation';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return 'Accomodations';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create accomodation')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(! $this->accomodation->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->accomodation->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('delete')
                ->canSee($this->accomodation->exists),
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
                Input::make('accomodation.name')
                    ->title('Name')
                    ->placeholder('Akwa Palace')
                    ->required(),

                Select::make('accomodation.type')
                    ->title('Accomodation type')
                    ->options([
                        'hall' => 'Hall',
                        'room' => 'Room',
                    ])
                    ->required(),

                Select::make('accomodation.selectedEquipment')
                    ->title('Accomodation equipment')
                    ->options([
                        'swimming pool' => 'Swimming pool',
                        'smoking' => 'Smoking',
                        'wifi' => 'Wifi',
                        'restaurant' => 'Restaurant',
                        'parking' => 'Parking',
                    ])
                    ->value($this->accomodation->equipment)
                    ->multiple(),

                Input::make('accomodation.city')
                    ->title('City')
                    ->placeholder('Douala'),

                Input::make('accomodation.quarter')
                    ->title('Quarter')
                    ->placeholder('Akwa')
                    ->required(),

                TextArea::make('accomodation.description')
                    ->title('Description')
                    ->rows(3)
                    ->required(),

                CheckBox::make('accomodation.available')
                    ->title('Available?')
                    ->sendTrueOrFalse(),

                Input::make('accomodation.accommodation_number')
                    ->title('Accomodation number')
                    ->placeholder('A01')
                    ->required(),

                Input::make('accomodation.floor_number')
                    ->title('Accomodation floor number')
                    ->placeholder(1)
                    ->type('number')
                    ->required(),

                Upload::make('accomodation.attachment')
                    ->title('Accomodation images')
                    ->acceptedFiles('image/*')
                    ->required(),
            ]),
        ];
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Request $request)
    {
        $equipment = $request->get('accomodation')['selectedEquipment'] ?? [];
        unset($this->accomodation->equipment);
        $this->accomodation->fill($request->get('accomodation'))->save();

        foreach (AccomodationEquipment::where('accomodation_id', $this->accomodation->id)->get() as $item) {
            $item->delete();
        }

        foreach ($equipment as $item) {
            AccomodationEquipment::create([
                'accomodation_id' => $this->accomodation->id,
                'name' => $item,
            ]);
        }

        $this->accomodation->attachment()->syncWithoutDetaching(
            $request->input('accomodation.attachment', [])
        );

        Alert::info('You have successfully created an accomodation.');

        return redirect()->route('platform.accomodation.list');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete()
    {
        $this->accomodation->delete();

        Alert::info('You have successfully deleted the accomodation.');

        return redirect()->route('platform.accomodation.list');
    }
}
