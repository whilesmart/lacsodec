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
                TD::make('Actions')
        ->alignRight()
        ->render(function (ExpertProfile $expert) {
            return Button::make('Delete Expert')
                ->confirm('After deleting, the expert will be gone forever')
                ->method('delete', ['expert' => $expert->id]);
        }),
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
        if($experts > 0) {
            Toast::error('The selected user is already an expert');
            return;
        }
        $expert = ExpertProfile::create([
            'user_id' => $fields['user_id'],
            'location' => $fields['location'],
            'details' => $fields['details'],
            'status' => $fields['status'],
        ]);

        Toast::success($user->name. ' is now an expert');
    }

    public function delete(ExpertProfile $expert)
    {
        $expert->delete();
    }
}
