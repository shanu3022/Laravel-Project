<?php

namespace App\Providers;

use Laravel\Telescope\Telescope;
use Laravel\Telescope\TelescopeApplicationServiceProvider;
use Illuminate\Support\Facades\Gate;

class TelescopeServiceProvider extends TelescopeApplicationServiceProvider
{
    public function register(): void
    {
        Telescope::night();

        Telescope::filter(function () {
            return true;
        });
    }

    protected function gate(): void
    {
        Gate::define('viewTelescope', function ($user = null) {
            return true; // 👈 THIS removes 403
        });
    }
}
