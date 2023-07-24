<?php

declare(strict_types=1);

namespace App\Orchid;

use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;
use Orchid\Screen\Actions\Menu;

class PlatformProvider extends OrchidServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);

        // ...
    }

    /**
     * Register the application menu.
     *
     * @return Menu[]
     */
    public function menu(): array
    {
        return [

            Menu::make(__('Users'))
                ->icon('bs.people')
                ->route('platform.systems.users')
                ->permission('platform.systems.users')
                ->title(__('Access Controls')),

            Menu::make(__('Roles'))
                ->icon('bs.lock')
                ->route('platform.systems.roles')
                ->permission('platform.systems.roles')
                ->divider(),

            Menu::make('Articles')
                ->icon('bs.file-earmark-post')
                ->route('platform.article.list')
                ->permission(['platform.systems.roles', 'articles.list'])
                ->title('Articles'),

            Menu::make('Article categories')
                ->icon('bs.file-earmark-post')
                ->route('platform.articlecategory.list')
                ->permission(['platform.systems.roles', 'articles.list']),

            Menu::make('Article tags')
                ->icon('bs.file-earmark-post')
                ->route('platform.articletag.list')
                ->permission(['platform.systems.roles', 'articles.list'])
                ->divider(),

            Menu::make('Event')
                ->icon('bs.file-earmark-post')
                ->permission(['platform.systems.roles', 'events.list'])
                ->route('platform.event.list')
                ->title('Event'),

            Menu::make('Event registrations')
                ->icon('bs.file-earmark-check-fill')
                ->route('platform.event-registration.list')
                ->permission(['platform.systems.roles', 'events.list'])
                ->divider(),

            Menu::make('CSOS')
                ->icon('bs.buildings-fill')
                ->route('platform.cso.list')
                ->permission(['platform.systems.roles', 'csos.list'])
                ->title('CSOS')
                ->divider(),

            Menu::make('Accommodations')
                ->icon('bs.buildings')
                ->route('platform.accomodation.list')
                ->permission(['platform.systems.roles', 'lodges.list'])
                ->title('Lodges'),

            Menu::make('Bookings')
                ->icon('bs.buildings')
                ->route('platform.booking.list')
                ->permission(['platform.systems.roles', 'bookings.list'])
                ->divider(),

            Menu::make('Contacts')
                ->icon('bs.phone')
                ->route('platform.contact.list')
                ->permission(['platform.systems.roles', 'info.list'])
                ->title('Info')
                ->divider(),

            Menu::make('Expert Profiles')
                ->icon('bs.people')
                ->route('platform.expert.list')
                ->permission(['platform.systems.roles', 'experts.list'])
                ->title('Expert Profiles'),

            Menu::make('Human Resource')
                ->icon('bs.people')
                ->route('platform.humanresource.list')
                ->permission(['platform.systems.roles', 'experts.list']),
        ];
    }

    /**
     * Register permissions for the application.
     *
     * @return ItemPermission[]
     */
    public function permissions(): array
    {
        return [
            ItemPermission::group(__('System'))
                ->addPermission('platform.systems.roles', __('Roles'))
                ->addPermission('platform.systems.users', __('Users')),
        ];
    }
}
