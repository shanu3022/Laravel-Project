<?php

use Illuminate\Support\Facades\Schedule;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Inspiring;
use App\Jobs\TestJob;

Schedule::job(new TestJob)->everyMinute();

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
});
