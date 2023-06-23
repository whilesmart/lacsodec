<?php

namespace App\Orchid\Layouts\Cso;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;

class CsoBasicInfo extends Rows
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
            Input::make('cso.name')
                ->title('Name')
                ->placeholder('CSO name')
                ->help('Give the name of the CSO')
                ->required(),

            Input::make('cso.assessment_score')
                ->title('Assessment score')
                ->placeholder('CSO assessment score')
                ->help('Give the assessment score of the CSO')
                ->type('number'),

            Input::make('cso.partnership')
                ->title('Partnership')
                ->placeholder('CSO partnership')
                ->help('Give the partnership of the CSO'),

            Select::make('cso.status')
                ->options([
                    'pending'   => 'Pending',
                    'approved'   => 'Approved',
                    'rejected'   => 'Rejected',
                ])
                ->title('Select CSO status')
                ->help('Select the status of the CSO'),

            DateTimer::make('cso.registration_date')
                ->title('Registration date')
                ->format('Y-m-d')
                ->required(),

            Input::make('cso.registration_number')
                ->title('Registration number')
                ->placeholder('#1561ADKI')
                ->help('Give the registration number of the CSO')
                ->required(),

            Select::make('cso.organization_type')
                ->options([
                    'Association'   => 'Association',
                    'Accredited NGO'   => 'Accredited NGO',
                    'trade union'   => 'trade union',
                    'CIG'   => 'CIG',
                    'Cooperative'   => 'Cooperative',
                    'Media'   => 'Media',
                    'Village development Association'   => 'Village development Association',
                    'CSO Network'   => 'CSO Network',
                    'Faith Based organization'   => 'Faith Based organization',
                ])
                ->title('Type of organization')
                ->help('Select the type of organization'),

                Select::make('cso.country')
                ->options([
                    'cameroon' => 'Cameroon',
                    'nigeria' => 'Nigeria',
                    'ghana' => 'Ghana',
                    'rwanda' => 'Rwanda',
                ])
                ->title('Country')
                ->required(),

                Input::make('cso.region')
                ->title('Region')
                ->required(),

                Input::make('cso.division')
                ->title('Division')
                ->required(),

                Input::make('cso.sub_division')
                ->title('Sub division')
                ->required(),

                Input::make('cso.village')
                ->title('Village')
                ->required(),

            Cropper::make('cso.image')
                ->width(200)
                ->height(200)
        ];
    }
}
