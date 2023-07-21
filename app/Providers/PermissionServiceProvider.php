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
            ->addPermission('articles', 'artcles')
            ->addPermission('events', 'events')
            ->addPermission('csos', 'csos ')
            ->addPermission('lodges', 'lodges')
            ->addPermission('info', 'info')
            ->addPermission('expert', 'expert');

        $dashboard->registerPermissions($permissions);
    }
}
