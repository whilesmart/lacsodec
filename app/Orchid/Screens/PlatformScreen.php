<?php

declare(strict_types=1);

namespace App\Orchid\Screens;

use App\Models\Accomodation;
use App\Models\Booking;
use App\Models\Cso;
use App\Models\Event;
use App\Models\EventRegistration;
use App\Models\ExpertProfile;
use App\Models\User;
use App\Orchid\Layouts\Charts\BasicLineChart;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class PlatformScreen extends Screen
{
    /**
     * Query data.
     */
    public function query(): iterable
    {
        $users = User::count();
        $allCsos = Cso::count();
        $approvedCsos = Cso::where('status', 'approved')->count();
        $allExperts = ExpertProfile::count();
        $approvedExperts = ExpertProfile::where('status', 'approved')->count();
        $accomodations = Accomodation::count();
        $bookings = Booking::count();
        $events = Event::count();
        $eventRegistrations = EventRegistration::count();

        return [
            'user' => $users,
            'allCsos' => $allCsos,
            'approvedCsos' => $approvedCsos,
            'allExperts' => $allExperts,
            'approvedExperts' => $approvedExperts,
            'metrics' => [
                'users' => ['value' => number_format($users), 'diff' => 0],
                'allCsos' => ['value' => number_format($allCsos), 'diff' => 0],
                'approvedCsos' => ['value' => number_format($approvedCsos), 'diff' => 0],
                'allExperts' => ['value' => number_format($allExperts), 'diff' => 0],
                'approvedExperts' => ['value' => number_format($approvedExperts), 'diff' => 0],
                'accomodations' => ['value' => number_format($accomodations), 'diff' => 0],
                'bookings' => ['value' => number_format($bookings), 'diff' => 0],
                'events' => ['value' => number_format($events), 'diff' => 0],
                'eventRegistrations' => ['value' => number_format($eventRegistrations), 'diff' => 0],
            ],
            'new_users' => [
                User::countByDays()->toChart('Users'),
            ],
            'new_csos' => [
                Cso::countByDays()->toChart('Csos'),
            ],
            'new_experts' => [
                ExpertProfile::countByDays()->toChart('Experts'),
            ],
            'new_accomodations' => [
                Accomodation::countByDays()->toChart('Accomodations'),
            ],
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return '';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return '';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): iterable
    {
        return [
            Layout::metrics([
                'Total users' => 'metrics.users',
                'All Csos' => 'metrics.allCsos',
                'Approved Csos' => 'metrics.approvedCsos',
                'Total experts' => 'metrics.allExperts',
                'Total accomodations' => 'metrics.accomodations',
                'Total bookings' => 'metrics.bookings',
            ]),
            Layout::columns([
                BasicLineChart::make('new_users', 'New users'),
                BasicLineChart::make('new_csos', 'New Csos'),
            ]),
            Layout::columns([
                BasicLineChart::make('new_experts', 'New experts'),
                BasicLineChart::make('new_accomodations', 'New Accomodations'),
            ]),
        ];
    }

    public function permission(): ?iterable
    {
        return [
            'platform.systems.roles',
            'platform.modules.events',
        ];
    }
}
