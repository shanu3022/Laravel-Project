<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Laravel\Telescope\Telescope;
use Laravel\Telescope\IncomingEntry;

class TelescopeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        if (! app()->environment(['local', 'staging', 'production'])) {
            return;
        }

        Telescope::filter(function (IncomingEntry $entry) {
            return true;
        });
    }

    public function boot(): void
    {
        $this->gate();
    }

    protected function gate(): void
    {
        Gate::define('viewTelescope', function ($user = null) {
            return true; // ⚠️ secure this later
        });
    }
}
