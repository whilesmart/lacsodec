<?php

namespace App\Orchid\Screens;

use App\Models\ExpertProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Orchid\Screen\Screen;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Textarea;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;

class ExpertProfileScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'expert_profiles' => ExpertProfile::with('user')->latest()->get(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'ExpertProfileScreen';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            ModalToggle::make('Add Expert Profile')
                ->modal('ExpertProfile')
                ->method('create')
                ->icon('plus'),
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
            Layout::table('expert_profiles', [
                TD::make('user.name', 'User'),
                TD::make('location'),
                TD::make('status'),
                TD::make('details'),
                TD::make(__('Actions'))
                    ->align(TD::ALIGN_CENTER)
                    ->width('100px')
                    ->render(fn (ExpertProfile $expert) => DropDown::make()
                        ->icon('bs.three-dots-vertical')
                        ->list([
                            ModalToggle::make('Edit Expert Profile')
                                ->modal('asyncEditExpertProfile')
                                ->method('edit')
                                ->icon('bs.pencil')
                                ->asyncParameters(['expert' => $expert->id]),

                            Button::make('Delete Expert')
                                ->confirm('After deleting, the expert will be gone forever')
                                ->icon('bs.trash')
                                ->method('delete', ['expert' => $expert->id])
                        ])),
            ]),

            Layout::modal('ExpertProfile', Layout::rows([
                Select::make('user_id')
                    ->fromModel(User::class, 'email', 'id')
                    ->title('Select user')
                    ->help('Select the user to be an expert')
                    ->required(),
                Input::make('location')
                    ->title('Location')
                    ->placeholder('Enter Expert location')
                    ->help('The location of the expert')
                    ->required(),
                Input::make('status')
                    ->title('Expert status')
                    ->placeholder('Enter Expert status')
                    ->help('The status of the expert')
                    ->required(),
                TextArea::make('details')
                    ->title('details')
                    ->placeholder('Enter Expert details')
                    ->rows(5)
                    ->required(),
            ]))
                ->title('Create Expert Profile')
                ->applyButton('Add Expert'),

            Layout::modal('asyncEditExpertProfile', [
                Layout::rows([
                    Input::make('expert.id')->canSee(false)->required(),
                    Select::make('expert.user_id')
                        ->fromModel(User::class, 'email', 'id')
                        ->title('Select user')
                        ->help('Select the user to be an expert')
                        ->required(),
                    Input::make('expert.location')
                        ->title('Location')
                        ->placeholder('Enter Expert location')
                        ->help('The location of the expert')
                        ->required(),
                    Input::make('expert.status')
                        ->title('Expert status')
                        ->placeholder('Enter Expert status')
                        ->help('The status of the expert')
                        ->required(),
                    TextArea::make('expert.details')
                        ->title('details')
                        ->placeholder('Enter Expert details')
                        ->rows(5)
                        ->required(),
                ]),
            ])->async('asyncGetExpert')
                ->title('Edit Expert Profile')
                ->applyButton('Edit Expert')
        ];
    }

    public function create(Request $request)
    {
        $fields = $request->validate([
            'user_id' => ['required', 'integer'],
            'location' => ['required', 'string'],
            'details' => ['required', 'string'],
            'status' => ['required', 'string']
        ]);
        $user = User::findOrFail($fields['user_id']);

        $experts = ExpertProfile::where('user_id', $fields['user_id'])->count();
        if ($experts > 0) {
            Toast::error('The selected user is already an expert');
            return;
        }
        $expert = ExpertProfile::create([
            'user_id' => $fields['user_id'],
            'location' => $fields['location'],
            'details' => $fields['details'],
            'status' => $fields['status'],
        ]);

        Toast::success($user->name . ' is now an expert');
    }

    public function delete(ExpertProfile $expert)
    {
        $expert->delete();
    }

    public function edit(Request $request)
    {
        $request->validate([
            'expert.user_id' => ['required', 'integer'],
            'expert.location' => ['required', 'string'],
            'expert.details' => ['required', 'string'],
            'expert.status' => ['required', 'string']
        ]);
        $expert = ExpertProfile::where('user_id', $request->expert['user_id'])->first();
        $expert->location = $request->expert['location'];
        $expert->details = $request->expert['details'];
        $expert->status = $request->expert['status'];
        Toast::success('Expert profile updated successfully');
    }

    public function asyncGetExpert(ExpertProfile $expert): array
    {
        return [
            'expert' => $expert
        ];
    }
}
