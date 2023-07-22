<?php

namespace App\Orchid\Layouts\Cso;

use App\Models\User;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Label;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;

class CsoContactInfo extends Rows
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
            Label::make('')
                ->title('CSO contact information'),

            Input::make('cso.contact_person_name')
                ->title('Name of contact person')
                ->placeholder('John Paul')
                ->required(),

            Select::make('cso.contact_person_sex')
                ->title('Sex of contact person')
                ->options([
                    'male' => 'Male',
                    'female' => 'Female',
                ])
                ->required(),

            Input::make('cso.contact_person_email')
                ->title('Email of contact person')
                ->placeholder('johnpaul@gmail.com')
                ->required(),

            Input::make('cso.contact_person_tel')
                ->title('Telephone of contact person')
                ->placeholder('+237656000000')
                ->required(),

            Input::make('cso.contact_person_position')
                ->title('Position of contact person')
                ->placeholder('CEO')
                ->required(),

            Input::make('cso.address')
                ->title('CSO Physical Address')
                ->placeholder('')
                ->required(),

            Input::make('cso.website')
                ->title('CSO Website')
                ->type('string')
                ->required(),

            Input::make('cso.email')
                ->title('CSO Email Address')
                ->placeholder('cso@gmail.com')
                ->required(),

            Input::make('cso.tel')
                ->title('CSO Contact phone number')
                ->placeholder('+237656000000')
                ->required(),

            Select::make('cso.user_id')
                ->fromModel(User::class, 'name', 'id')
                ->title('CSO user')
                ->required(),
        ];
    }
}
