<?php

namespace App\Orchid\Layouts\ExpertProfile;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;

class ExpertAchievements extends Rows
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
            Input::make('expert.certification')
                ->title('Certification'),

            DateTimer::make('expert.certification_date')
                ->title('Date of certification')
                ->format('Y-m-d'),

            Cropper::make('expert.certification_image')
                ->title('Certification image')
                ->targetUrl(),
        ];
    }
}
