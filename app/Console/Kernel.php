use App\Jobs\TestJob;
use Illuminate\Console\Scheduling\Schedule;

protected function schedule(Schedule $schedule)
{
    $schedule->job(new TestJob())->everyMinute();
}
