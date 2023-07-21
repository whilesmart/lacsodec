<?php

namespace App\Orchid\Layouts\Cso;

use App\Services\CountryService;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Label;
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
            Label::make('')
                ->title('CSO basic information'),

            Input::make('cso.name')
                ->title('Name')
                ->placeholder('CSO name')
                ->help('Give the name of the CSO')
                ->required(),

            Select::make('cso.assessment_score')
                ->title('Assessment score')
                ->options([
                    'Not Assessed' => 'Not Assessed',
                    'Assessment Level 01' => 'Assessment Level 01',
                    'Assessment Level 02' => 'Assessment Level 02',
                    'Assessment Level 03' => 'Assessment Level 03',
                    'Assessment Level 04' => 'Assessment Level 04',
                    'Assessment Level 05' => 'Assessment Level 05',
                ])
                ->placeholder('CSO assessment score')
                ->help('Give the assessment score of the CSO'),

            Input::make('cso.partnership')
                ->title('Acronym')
                ->placeholder('CSO partnership')
                ->help('Give the partnership of the CSO'),

            Select::make('cso.status')
                ->options([
                    'verified' => 'verified',
                    'not verified' => 'not verified',
                ])
                ->title('Select CSO status')
                ->help('Select the status of the CSO'),

            Input::make('cso.registration_year')
                ->title('Registration year')
                ->type('number')
                ->required(),

            Input::make('cso.registration_number')
                ->title('Registration number')
                ->placeholder('#1561ADKI')
                ->help('Give the registration number of the CSO')
                ->required(),

            Select::make('cso.organization_type')
                ->options([
                    'Association' => 'Association',
                    'Accredited NGO' => 'Accredited NGO',
                    'trade union' => 'trade union',
                    'CIG' => 'CIG',
                    'Cooperative' => 'Cooperative',
                    'Media' => 'Media',
                    'Village development Association' => 'Village development Association',
                    'CSO Network' => 'CSO Network',
                    'CBO' => 'CBO',
                    'Faith Based organization' => 'Faith Based organization',
                ])
                ->title('Type of organization')
                ->help('Select the type of organization'),

            Select::make('cso.country')
                ->options(collect($this->countries)->pluck('name', 'name')->toArray())
                ->title('Country')
                ->required(),

            Input::make('cso.region')
                ->title('State/Region/Country')
                ->required(),

            Input::make('cso.division')
                ->title('Region/Province')
                ->required(),

            Input::make('cso.sub_division')
                ->title('Sub Division')
                ->required(),

            Input::make('cso.village')
                ->title('Village')
                ->required(),

            Cropper::make('cso.image')
                ->width(200)
                ->height(200),
        ];
    }
}
