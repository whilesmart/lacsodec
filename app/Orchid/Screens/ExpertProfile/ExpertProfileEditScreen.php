<?php

namespace App\Orchid\Screens\ExpertProfile;

use App\Models\ExpertProfile;
use App\Orchid\Layouts\ExpertProfile\ExpertAchievements;
use App\Orchid\Layouts\ExpertProfile\ExpertPersonalInfo;
use App\Orchid\Layouts\ExpertProfile\ExpertWorkExperience;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Toast;

class ExpertProfileEditScreen extends Screen
{
    /**
     * @var ExpertProfile
     */
    public $expert;

    /**
     * Query data.
     *
     * @param Post $expert
     *
     * @return array
     */
    public function query(ExpertProfile $expert): iterable
    {
        return [
            'expert' => $expert
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->expert->exists ? 'Edit expert' : 'Creating a new expert';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "Expert profile";
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create expert')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->expert->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->expert->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('delete')
                ->canSee($this->expert->exists),
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
            ExpertPersonalInfo::class,
            ExpertWorkExperience::class,
            ExpertAchievements::class
        ];
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Request $request)
    {
        $this->expert->fill($request->get('expert'));
        $experts = ExpertProfile::where('user_id', $this->expert->user_id)->count();
        if ($experts > 0) {
            Toast::error('The selected user is already an expert');
            return;
        }

        $this->expert->save();

        Alert::info('You have successfully created an expert');

        return redirect()->route('platform.expert.list');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete()
    {
        $this->expert->delete();

        Alert::info('You have successfully deleted the expert.');

        return redirect()->route('platform.expert.list');
    }
}
