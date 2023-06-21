<?php

namespace App\Orchid\Screens\ExpertProfile;

use App\Models\ExpertProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ExpertProfileEditScreen extends Screen
{
    /**
     * @var ExpertProfile
     */
    public $expert;

    /**
     * Query data.
     *
     * @param Post $expert
     *
     * @return array
     */
    public function query(ExpertProfile $expert): iterable
    {
        return [
            'expert' => $expert
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->expert->exists ? 'Edit expert' : 'Creating a new expert';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "Expert profile";
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create expert')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->expert->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->expert->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('delete')
                ->canSee($this->expert->exists),
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
                Select::make('expert.user_id')
                    ->fromModel(User::class, 'email', 'id')
                    ->title('Select user')
                    ->help('Select the user to be an expert')
                    ->required(),

                Input::make('expert.location')
                    ->title('Location')
                    ->placeholder('Enter Expert location')
                    ->help('The location of the expert')
                    ->required(),

                Input::make('expert.status')
                    ->title('Expert status')
                    ->placeholder('Enter Expert status')
                    ->help('The status of the expert')
                    ->required(),

                TextArea::make('expert.details')
                    ->title('details')
                    ->placeholder('Enter Expert details')
                    ->rows(5)
                    ->required(),

                DateTimer::make('expert.birthday')
                    ->title('Date of birth')
                    ->format('Y-m-d')
                    ->required(),

                Select::make('expert.sex')
                    ->options([
                        'male' => 'Male',
                        'female' => 'Female',
                    ])
                    ->title('Sex')
                    ->required(),

                Input::make('expert.birth_place')
                    ->title('Place of birth')
                    ->required(),

                Select::make('expert.nationality')
                    ->options([
                        'cameroonian' => 'Cameroonian'
                    ])
                    ->title('Nationality')
                    ->required(),

                Select::make('expert.language')
                    ->options([
                        'english' => 'English',
                        'french' => 'French',
                    ])
                    ->title('Language')
                    ->required(),

                Cropper::make('expert.image')
                    ->title('Expert profile image')
                    ->targetUrl()
                    ->required(),

                Input::make('expert.company')
                    ->title('Company')
                    ->required(),

                Input::make('expert.work_duration')
                    ->title('Work duration')
                    ->required(),

                Input::make('expert.certification')
                    ->title('Certification'),

                DateTimer::make('expert.certification_date')
                    ->title('Date of certification')
                    ->format('Y-m-d'),

                Cropper::make('expert.certificate_image')
                    ->title('Certification image')
                    ->targetUrl(),
            ])
        ];
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Request $request)
    {
        $this->expert->fill($request->get('expert'));
        $experts = ExpertProfile::where('user_id', $this->expert->user_id)->count();
        if ($experts > 0) {
            Toast::error('The selected user is already an expert');
            return;
        }

        $this->expert->save();

        Alert::info('You have successfully created an expert');

        return redirect()->route('platform.expert.list');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete()
    {
        $this->expert->delete();

        Alert::info('You have successfully deleted the expert.');

        return redirect()->route('platform.expert.list');
    }
}
