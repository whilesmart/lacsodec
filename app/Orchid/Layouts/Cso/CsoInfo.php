<?php

namespace App\Orchid\Layouts\Cso;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Label;
use Orchid\Screen\Fields\Radio;
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
                ->placeholder('CSO name')
                ->required(),

            TextArea::make('cso.mission')
                ->title('CSO Vision statement')
                ->placeholder('CSO name')
                ->required(),

            Group::make([
                Input::make('cso.primary_target_beneficiaries')
                    ->title('Primary target beneficiaries')
                    ->required(),
                Input::make('cso.secondary_target_beneficiaries')
                    ->title('Secondary target beneficiaries')
                    ->required(),
            ]),

            Label::make('cso.domain')
                ->title('Choose domain of activity'),
            Radio::make('cso.domain')
                ->value('Women empowerment')
                ->title('Women empowerment'),
            Radio::make('cso.domain')
                ->value('Youth empowerment')
                ->title('Youth empowerment'),
            Radio::make('cso.domain')
                ->value('Environmental protection')
                ->title('Environmental protection'),
            Radio::make('cso.domain')
                ->value('Governance')
                ->title('Governance'),
            Radio::make('cso.domain')
                ->value('Water')
                ->title('Water'),
            Radio::make('cso.domain')
                ->value('Human rights')
                ->title('Human rights'),
            Radio::make('cso.domain')
                ->value('Child protection')
                ->title('Child protection'),
            Radio::make('cso.domain')
                ->value('Peace Building')
                ->title('Peace Building'),
            Radio::make('cso.domain')
                ->value('Humanitarian response')
                ->title('Humanitarian response'),
            Radio::make('cso.domain')
                ->value('GBV prevention/response')
                ->title('GBV prevention/response'),
            Radio::make('cso.domain')
                ->value('Education')
                ->title('Education'),
            Radio::make('cso.domain')
                ->value('CSO strengthening')
                ->title('CSO strengthening'),
            Radio::make('cso.domain')
                ->value('ICT')
                ->title('ICT'),
            Radio::make('cso.domain')
                ->value('Climate protection')
                ->title('Climate protection'),
            Radio::make('cso.domain')
                ->value('Food security')
                ->title('Food security'),
            Radio::make('cso.domain')
                ->value('Animal protection')
                ->title('Animal protection'),
            Radio::make('cso.domain')
                ->value('Marine life protection')
                ->title('Marine life protection'),
            Radio::make('cso.domain')
                ->value('Renewable energy')
                ->title('Renewable energy'),
            Radio::make('cso.domain')
                ->value('Waste management')
                ->title('Waste management'),
            Radio::make('cso.domain')
                ->value('others')
                ->title('others'),

            Label::make('cso.board_directors')
                ->title('Board of directors'),
            Group::make([
                Radio::make('cso.board_directors')
                    ->value(1)
                    ->title('yes'),
                Radio::make('cso.board_directors')
                    ->value(0)
                    ->title('no'),
            ]),

            Label::make('cso.organization_leaderships')
                ->title('Organization leadership'),
            Group::make([
                Radio::make('cso.organization_leaderships')
                    ->value('Women headed organization')
                    ->title('Women headed organization'),
                Radio::make('cso.organization_leaderships')
                    ->value('Youth lead organization')
                    ->title('Youth lead organization'),
                Radio::make('cso.organization_leaderships')
                    ->value('General')
                    ->title('General'),
            ]),

            Select::make('cso.african_coverage')
                ->options([
                    'national'   => 'National',
                    'regional'   => 'Regional (more than one african country)',
                ])
                ->title('African coverage of CSO')
        ];
    }
}
