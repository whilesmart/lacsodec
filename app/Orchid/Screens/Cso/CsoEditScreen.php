<?php

namespace App\Orchid\Screens\Cso;

use App\Models\Cso;
use App\Models\CsoDomain;
use App\Orchid\Layouts\Cso\CsoBasicInfo;
use App\Orchid\Layouts\Cso\CsoContactInfo;
use App\Orchid\Layouts\Cso\CsoInfo;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class CsoEditScreen extends Screen
{
    /**
     * @var Cso
     */
    public $cso;

    /**
     * Query data.
     *
     *
     * @return array
     */
    public function query(Cso $cso): iterable
    {
        $cso->load(['domains']);
        $cso->domains = $cso->domains->pluck('name')->toArray();

        return [
            'cso' => $cso,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return $this->cso->exists ? 'Edit cso '.$this->cso->name : 'Creating a new CSO';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return 'Csos';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Save Cso')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(! $this->cso->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->cso->exists),

            Button::make('Delete')
                ->icon('trash')
                ->method('delete')
                ->canSee($this->cso->exists),
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
            CsoBasicInfo::class,
            CsoContactInfo::class,
            CsoInfo::class,
        ];
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Request $request)
    {
        $domains = $request->get('cso')['domains'] ?? [];
        unset($this->cso->domains);
        $this->cso->fill(array_merge($request->get('cso'), [
            'created_by' => $request->user()->id,
        ]))->save();

        foreach (CsoDomain::where('cso_id', $this->cso->id)->get() as $item) {
            $item->delete();
        }

        foreach ($domains as $item) {
            CsoDomain::create([
                'cso_id' => $this->cso->id,
                'name' => $item,
            ]);
        }

        Alert::info('You have successfully created a cso.');

        return redirect()->route('platform.cso.list');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete()
    {
        $this->cso->delete();

        Alert::info('You have successfully deleted the cso.');

        return redirect()->route('platform.cso.list');
    }

    /**
     * Permission
     */
    public function permission(): ?iterable
    {
        return [
            'csos.edit',
            'platform.systems.roles',
        ];
    }
}
