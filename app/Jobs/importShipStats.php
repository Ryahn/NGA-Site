<?php

namespace App\Jobs;

use App\Models\Ship;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class importShipStats implements ShouldQueue
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
        $api = Http::get('https://api.wows-numbers.com/personal/rating/expected/json/')->json();
        foreach ($api['data'] as $key => $value) {

            if (isset($value['average_damage_dealt'])) {
                $ship = Ship::find($key);
                if ($ship) {
                    $ship->average_damage_dealt = $value['average_damage_dealt'];
                    $ship->average_frags = $value['average_frags'];
                    $ship->win_rate = $value['win_rate'];
                    $ship->save();
                }

                if (settings()->get('log_imports') == "true") {
                    logger("Updated " . $ship->id . " - " . $ship->name . " expected stats");
                }
            } else {
                continue;
            }
        }
    }
}
