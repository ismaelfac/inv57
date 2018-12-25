<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PropertiesWasi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'wasi:StatusConnection';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Verifica las conexiones con el api de Wasi';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
    }
}
