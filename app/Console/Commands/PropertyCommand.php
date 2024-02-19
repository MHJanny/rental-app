<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\Category;
use App\Constants\Status;
use App\Models\Property;
use Illuminate\Support\Str;
use Illuminate\Process\Pool;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Process;

class PropertyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:seed {--processes=0}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $processes = (int) $this->option('processes');
            if ($processes) {
                $this->spawn($processes);
            }
            for ($i=0; $i <100000 ; $i++) { 
                $initialTime = microtime(true);
                if($i % 1000 === 0) {
                    echo 'Processed '.$i .PHP_EOL;
                    echo 'Required Time '. microtime(true) - $initialTime .PHP_EOL;
                  }
                  $this->insert() ;
            }
         
       
    }

    public function spawn($processes)
    {
        Process::pool(function(Pool $pool) use ($processes) {
            for ($i=0; $i < $processes ; $i++) { 
                echo 'Running process ' . $processes;
                $pool->command('php artisan app:seed')->timeout(60 * 5);
            }
        })->start()->wait();
    }
    protected function insert ()
    {
        Property::create( [
            'title' => fake()->sentence,
            'slug' => fake()->slug,
            'description' => fake()->paragraph,
            'category_id' => Category::pluck('id')->random(),
            'user_id' => User::pluck('id')->random(),
            'address' => fake()->address,
            'start_date' => fake()->date,
            'end_date' => fake()->date,
            'gallery_id' => null,
            'price' => fake()->randomNumber(4),
            'status' => Status::DRAFT,
            'is_featured' => fake()->boolean(30),
            'uuid'  => Str::uuid(),
        ]); 
    }
}
