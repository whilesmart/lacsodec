<?php

namespace App\Orchid\Layouts\ExpertProfile;

use App\Models\User;
use App\Services\CountryService;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;

class ExpertPersonalInfo extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;

    protected $countryService;

    protected $countries;

    public function __construct(CountryService $countryService)
    {
        $this->countryService = $countryService;
        $this->countries = $countryService->getAllCountries();
    }

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        return [
            Select::make('expert.user_id')
                ->fromModel(User::class, 'email', 'id')
                ->title('Select user')
                ->help('Select the user to be an expert')
                ->required(),

            Input::make('expert.location')
                ->title('Location')
                ->placeholder('Enter Expert location')
                ->help('The location of the expert'),

            Select::make('expert.status')
                ->options([
                    'pending' => 'Pending',
                    'approved' => 'Approved',
                    'rejected' => 'Rejected',
                ])
                ->title('Select expert status')
                ->help('Select the status of the expert'),

            CheckBox::make('expert.isHumanResource')
                ->title('Is a human resource')
                ->sendTrueOrFalse(),

            TextArea::make('expert.details')
                ->title('Expert bio details')
                ->placeholder('Enter Expert details')
                ->rows(5)
                ->required(),

            DateTimer::make('expert.birthday')
                ->title('Date of birth')
                ->format('Y-m-d'),

            Select::make('expert.sex')
                ->options([
                    'male' => 'Male',
                    'female' => 'Female',
                ])
                ->title('Sex'),

            Input::make('expert.birth_place')
                ->title('Place of birth'),

            Select::make('expert.nationality')
                ->options(collect($this->countries)->pluck('name', 'name')->toArray())
                ->title('Nationality'),

            Select::make('expert.languages')
                ->options([
                    'english' => 'English',
                    'french' => 'French',
                    'spanish' => 'Spanish',
                    'german' => 'German',
                ])
                ->multiple()
                ->title('Language')
                ->required(),

            Input::make('expert.phone_number')
                ->title('Phone number'),

            Cropper::make('expert.image')
                ->title('Expert profile image')
                ->targetUrl(),
        ];
    }
}
