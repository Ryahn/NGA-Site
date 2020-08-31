<?php

namespace App\Jobs;

use App\Models\Ship as Ship;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class importShips implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        function romanize($number)
        {
            $map = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
            $returnValue = '';
            while ($number > 0) {
                foreach ($map as $roman => $int) {
                    if ($number >= $int) {
                        $number -= $int;
                        $returnValue .= $roman;
                        break;
                    }
                }
            }
            return $returnValue;
        }

        $page = Http::get("https://api.worldofwarships.com/wows/encyclopedia/ships/?application_id=" . env('APPLICATION_ID'))->json();

        if ($page['status'] !== 'ok') return logger('Ship import failed');
        $meta = $page['meta'];
        for ($x = 1; $x <= $meta['page_total']; $x++) {
            $url = "https://api.worldofwarships.com/wows/encyclopedia/ships/?application_id=" . env('APPLICATION_ID') . '&page_no=' . $x;
            $shipApi = Http::get($url)->json();
            $ships = $shipApi['data'];
            foreach ($ships as $ship) {
                $store = [
                    'id' => $ship['ship_id'],
                    'name' => $ship['name'],
                    'type' => $ship['type'],
                    'tier_r' => romanize($ship['tier']),
                    'tier_n' => $ship['tier'],
                    'image' => $ship['images']['large'],
                    'is_premium' => $ship['is_premium'],
                    'nation' => $ship['nation'],
                ];

                Ship::updateOrCreate(['id' => $store['id']], $store);
                if (settings()->get('log_imports') == "true") {
                    logger("Added/updated " . $store['id'] . " - " . $store['name'] . " to database");
                }
            }
        }
    }
}
