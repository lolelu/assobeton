<?php

namespace App\Console;

use App\Http\Controllers\Admin\CircolariController;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Circolari;
use Illuminate\Support\Facades\Http;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->everyMinute();
        // $schedule->call(DB::table('recent_users')->delete())->everyMinute();

        // $schedule->call(function () {
        //     $response = Http::get('https://6388ac21d94a7e5040a3887c.mockapi.io/circolari/circolari');


        //     foreach ($response->json() as $circolare) {
        //         $circolare = Circolari::updateOrCreate(
        //             ['id' => $circolare['id']],
        //             [

        //                 'title' => $circolare['circolare']['titolo'],
        //                 'date' => date('Y-m-d H:i:s', strtotime($circolare['circolare']['data'])),
        //                 'destinatari' => $circolare['circolare']['destinatari'],
        //                 'area' => $circolare['circolare']['areaprincipale'],
        //                 'main_file' => $circolare['circolare']['documento']['documentoprincipale'],


        //             ]
        //         );
        //     }
        // })->everyMinute();

        $schedule->command('circolari:sync')->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
