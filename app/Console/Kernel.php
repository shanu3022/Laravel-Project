use App\Jobs\KernelTestJob;
use Illuminate\Console\Scheduling\Schedule;

protected function schedule(Schedule $schedule)
{
    $schedule->job(new KernelTestJob())->everyMinute();
}
