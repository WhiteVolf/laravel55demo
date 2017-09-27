<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Json;

class GenerateJsonTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:jsoncontent';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create json content.';

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
        for ($i = 0; $i < 500; $i++) {
        	$json = new Json;
        	$json->jsonfield = json_encode(['id' => $i, 'meta' => rand(0, 456)]);
        	$json->save();
        }
    }
}
