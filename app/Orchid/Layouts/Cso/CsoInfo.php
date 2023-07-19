<?php

namespace App\Orchid\Layouts\Cso;

use App\Models\CsoActivityDomain;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Label;
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
            Label::make('')
                ->title('CSO general information'),

            TextArea::make('cso.vision_statement')
                ->title('CSO Vision statement')
                ->placeholder('CSO vision statement')
                ->required(),

            TextArea::make('cso.mission')
                ->title('CSO mission')
                ->placeholder('CSO mission'),

            TextArea::make('cso.background')
                ->title('CSO background and track record')
                ->placeholder('background'),

            Group::make([
                Input::make('cso.primary_target_beneficiaries')
                    ->title('Primary target beneficiaries')
                    ->required(),
                Input::make('cso.secondary_target_beneficiaries')
                    ->title('Secondary target beneficiaries'),
            ]),

            Select::make('cso.domain')
                ->fromModel(CsoActivityDomain::orderBy('name', 'asc'), 'name', 'name')
                ->title('Primary domain of activity')
                ->required(),

            Select::make('cso.domains')
                ->fromModel(CsoActivityDomain::orderBy('name', 'asc'), 'name', 'name')
                ->title('Choose other domains of activity')
                ->multiple(),

            CheckBox::make('cso.board_directors')
                ->title('Board of directors?')
                ->sendTrueOrFalse(),

            Select::make('cso.organization_leaderships')
                ->title('Organization leadership')
                ->options([
                    'Women-led organization' => 'Women-led organization',
                    'Youth-led organization' => 'Youth-led organization',
                    'General' => 'General',
                ]),

            Select::make('cso.african_coverage')
                ->options([
                    'local' => 'Local',
                    'national' => 'National',
                    'global' => 'Global (more than one african country)',
                ])
                ->title('African coverage of CSO'),
        ];
    }
}
