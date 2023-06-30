<?php

namespace App\Orchid\Layouts\ExpertProfile;

use App\Models\User;
use Orchid\Screen\Field;
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

            Input::make('expert.status')
                ->title('Expert status')
                ->placeholder('Enter Expert status')
                ->help('The status of the expert'),

            TextArea::make('expert.details')
                ->title('details')
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
                ->options([
                    'cameroonian' => 'Cameroonian',
                ])
                ->title('Nationality'),

            Select::make('expert.language')
                ->options([
                    'english' => 'English',
                    'french' => 'French',
                ])
                ->title('Language'),

            Cropper::make('expert.image')
                ->title('Expert profile image')
                ->targetUrl(),
        ];
    }
}
