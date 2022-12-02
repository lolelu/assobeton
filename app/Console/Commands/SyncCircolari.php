<?php

namespace App\Console\Commands;

use App\Utils\CircolariMethods;
use Illuminate\Console\Command;

class SyncCircolari extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'circolari:sync';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync circolari from mockapi.io (later from a real API)';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {


        // TODO: add a return response to the sync method 
        return (new CircolariMethods())->sync();
    }
}
