<?php

namespace App\Orchid\Screens\Accomodation;

use App\Models\Accomodation;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Label;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class AccomodationEditScreen extends Screen
{
    /**
     * @var Post
     */
    public $accomodation;

    /**
     * Query data.
     */
    public function query(Accomodation $accomodation): array
    {
        $accomodation->load('attachment');

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

                Select::make('accomodation.country')
                    ->title('Country')
                    ->options([
                        'cameroon' => 'Cameroon',
                    ])
                    ->required(),

                Input::make('accomodation.city')
                    ->title('City')
                    ->placeholder('Douala')
                    ->required(),

                Input::make('accomodation.quarter')
                    ->title('Quarter')
                    ->placeholder('Akwa')
                    ->required(),

                TextArea::make('accomodation.description')
                    ->title('Description')
                    ->rows(3)
                    ->required(),

                Label::make('accomodation.available')
                    ->title('Available?'),
                Group::make([
                    CheckBox::make('accomodation.available')
                        ->value(1)
                        ->title('yes'),
                    CheckBox::make('accomodation.available')
                        ->value(0)
                        ->title('no'),
                ]),

                Input::make('accomodation.accommodation_number')
                    ->title('Accomodation number')
                    ->placeholder('A01')
                    ->required(),

                Upload::make('accomodation.attachment')
                    ->title('Accomodation images')
                    ->acceptedFiles('image/*'),
            ]),
        ];
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Request $request)
    {
        $this->accomodation->fill($request->get('accomodation'))->save();

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
