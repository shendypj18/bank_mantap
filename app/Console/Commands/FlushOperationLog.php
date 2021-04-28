<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class FlushOperationLog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'operationlog:flush';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove all operation log';

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
     * @return int
     */
    public function handle()
    {
        DB::table('admin_operation_log')->truncate();
    }
}
