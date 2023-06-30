<?php

namespace App\Orchid\Layouts\Cso;

use App\Models\CsoActivityDomain;
use Orchid\Screen\Field;
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

            Select::make('cso.domain')
                ->fromModel(CsoActivityDomain::class, 'name', 'name')
                ->title('Choose domain of activity')
                ->required(),

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
                    'national' => 'National',
                    'regional' => 'Regional (more than one african country)',
                ])
                ->title('African coverage of CSO'),
        ];
    }
}
