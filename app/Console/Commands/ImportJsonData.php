<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Order;
use Illuminate\Support\Facades\File;

class ImportJsonData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       // return Command::SUCCESS;
       $path = public_path('YellowSquash.orders.json'); 

       // Check if the file exists before attempting to read it
       if (File::exists($path)) {
           $json = File::get($path); 
           $data = json_decode($json, true); 
       
           foreach ($data as $item) {
               // Ensure the 'name' index exists to avoid errors
               if (isset($item['name'])) {
                   Order::create([
                       'name' => $item['name'],
                   ]);
               }
           }
       
           $this->info('JSON data imported successfully!');
       } else {
           $this->error('JSON file not found.');
       }
    }
}
