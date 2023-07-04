<?php

namespace App\Orchid\Screens\Contact;

use App\Models\ContactInfo;
use Illuminate\Http\Request;
use Orchid\Screen\Screen;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Input;

class ContactEditScreen extends Screen
{
    /**
     * @var ContactInfo
     */
    public $contactInfo;

    /**
     * Query data.
     *
     * @param ContactInfo $contactInfo
     *
     * @return array
     */
    public function query(ContactInfo $contactInfo): array
    {
        return [
            'contactInfo' => $contactInfo
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->contactInfo->exists ? 'Edit contact info' : 'Creating a new contact info';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "Contact info";
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create contact info')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->contactInfo->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->contactInfo->exists),

            Button::make('Delete')
                ->icon('trash')
                ->method('delete')
                ->canSee($this->contactInfo->exists),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('contactInfo.form_email_address')
                    ->title('Form email address')
                    ->type('email')
                    ->required(),

                Input::make('contactInfo.listed_email_address')
                    ->title('Listing email address')
                    ->type('email')
                    ->required(),
                
                Input::make('contactInfo.phone_number')
                    ->title('Phone number')
                    ->type('tel')
                    ->required(),
                
                Input::make('contactInfo.location')
                    ->title('Location')
                    ->required(),
            ])
        ];
    }

     /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Request $request)
    {
        $this->contactInfo->fill($request->get('contactInfo'))->save();

        Alert::info('You have successfully created a contact info.');

        return redirect()->route('platform.contact.list');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete()
    {
        $this->contactInfo->delete();

        Alert::info('You have successfully deleted the contact info.');

        return redirect()->route('platform.contact.list');
    }
}
