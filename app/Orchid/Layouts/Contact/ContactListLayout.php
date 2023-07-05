<?php

namespace App\Orchid\Layouts\Contact;

use App\Models\ContactInfo;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ContactListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'contactInfos';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('form_email_address', 'Form email'),
            TD::make('listed_email_address', 'Listed email'),
            TD::make('phone_number', 'Phone number'),
            TD::make('location', 'Location'),
            TD::make('Actions')
                ->alignRight()
                ->render(function (ContactInfo $contactInfo) {
                    return Link::make('Edit')
                        ->icon('pencil')
                        ->route('platform.contact.edit', $contactInfo);
                }),
        ];
    }
}
