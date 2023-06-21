<?php

namespace App\Orchid\Layouts\Cso;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
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
        ];
    }
}
