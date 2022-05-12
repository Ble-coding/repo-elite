<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        'App\Events\ParticulierHasRegisteredEvent' => [
            'App\Listeners\ParticulierHasRegisteredListener',
        ],
        'App\Events\ClientHasRegisteredEvent' => [
            'App\Listeners\ClientHasRegisteredListener',
        ],
        'App\Events\DeposeHasRegisteredEvent' => [
            'App\Listeners\DeposeHasRegisteredListener',
        ],
        'App\Events\DepositaryHasRegisteredEvent' => [
            'App\Listeners\DepositaryHasRegisteredListener',
        ],
        'App\Events\EntrepriseHasRegisteredEvent' => [
            'App\Listeners\EntrepriseHasRegisteredListener',
        ],
        'App\Events\SocietyHasRegisteredEvent' => [
            'App\Listeners\SocietyHHasRegisteredListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
