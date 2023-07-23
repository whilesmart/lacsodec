<?php

namespace App\Orchid\Screens\ExpertProfile;

use App\Models\ExpertLanguage;
use App\Models\ExpertProfile;
use App\Orchid\Layouts\ExpertProfile\ExpertAchievements;
use App\Orchid\Layouts\ExpertProfile\ExpertPersonalInfo;
use App\Orchid\Layouts\ExpertProfile\ExpertWorkExperience;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class ExpertProfileEditScreen extends Screen
{
    /**
     * @var ExpertProfile
     */
    public $expert;

    /**
     * Query data.
     *
     * @param  Post  $expert
     * @return array
     */
    public function query(ExpertProfile $expert): iterable
    {
        $expert->load(['languages']);
        $expert->languages = $expert->languages->pluck('name')->toArray();

        return [
            'expert' => $expert,
        ];
    }

    /**
     * The name of the screen displayed in the header.
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
        return 'Expert profile';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Save expert')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(! $this->expert->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->expert->exists),

            Button::make('Remove')
                ->icon('trash')
                ->confirm('Are you sure you want to delete this expert?')
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
            ExpertAchievements::class,
        ];
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Request $request)
    {
        $languages = $request->get('expert')['languages'] ?? [];
        unset($this->expert->languages);
        $this->expert->fill($request->get('expert'));

        $this->expert->save();

        foreach (ExpertLanguage::where('expert_id', $this->expert->id)->get() as $item) {
            $item->delete();
        }

        foreach ($languages as $item) {
            ExpertLanguage::create([
                'expert_id' => $this->expert->id,
                'name' => $item,
            ]);
        }

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

    /**
     * Permission
     */
    public function permission(): ?iterable
    {
        return [
            'experts.edit',
            'platform.systems.roles',
        ];
    }
}
