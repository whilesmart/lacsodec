<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;

class PermissionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(Dashboard $dashboard): void
    {
        $permissions = ItemPermission::group('modules')
            ->addPermission('articles.edit', 'artcles edit permission')
            ->addPermission('articles.list', 'artcles list permission')
            ->addPermission('events.edit', 'events edit permission')
            ->addPermission('events.list', 'events list permission')
            ->addPermission('csos.edit', 'csos edit permission')
            ->addPermission('csos.list', 'csos list permission')
            ->addPermission('lodges.edit', 'lodges edit permission')
            ->addPermission('lodges.list', 'lodges list permission')
            ->addPermission('bookings.edit', 'bookings edit permission')
            ->addPermission('bookings.list', 'bookings list permission')
            ->addPermission('info.edit', 'info edit permission')
            ->addPermission('info.list', 'info list permission')
            ->addPermission('experts.edit', 'expert edit permission')
            ->addPermission('experts.list', 'expert list permission');

        $dashboard->registerPermissions($permissions);
    }
}
