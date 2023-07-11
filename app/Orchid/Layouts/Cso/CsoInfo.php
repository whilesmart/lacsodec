<?php

namespace App\Orchid\Layouts\Cso;

use App\Models\CsoActivityDomain;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;

class CsoInfo extends Rows
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
            TextArea::make('cso.vision_statement')
                ->title('CSO Vision statement')
                ->placeholder('CSO vision statement')
                ->required(),

            TextArea::make('cso.mission')
                ->title('CSO mission')
                ->placeholder('CSO mission'),

            Group::make([
                Input::make('cso.primary_target_beneficiaries')
                    ->title('Primary target beneficiaries')
                    ->required(),
                Input::make('cso.secondary_target_beneficiaries')
                    ->title('Secondary target beneficiaries'),
            ]),

            Select::make('cso.domain')
                ->fromModel(CsoActivityDomain::class, 'name', 'name')
                ->title('Choose domain of activity')
                ->required(),

            Select::make('cso.second_domain')
                ->fromModel(CsoActivityDomain::class, 'name', 'name')
                ->title('Choose second domain of activity'),

            Select::make('cso.third_domain')
                ->fromModel(CsoActivityDomain::class, 'name', 'name')
                ->title('Choose third domain of activity'),

            CheckBox::make('cso.board_directors')
                ->title('Board of directors?')
                ->sendTrueOrFalse(),

            Select::make('cso.organization_leaderships')
                ->title('Organization leadership')
                ->options([
                    'Women headed organization' => 'Women headed organization',
                    'Youth lead organization' => 'Youth lead organization',
                    'General' => 'General',
                ]),

            Select::make('cso.african_coverage')
                ->options([
                    'national' => 'National',
                    'regional' => 'Regional (more than one african country)',
                ])
                ->title('African coverage of CSO'),
        ];
    }
}
