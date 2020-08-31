<?php

namespace App\Jobs;

use App\Models\Ship;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class importPlayerShipStats implements ShouldQueue
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
        $users = User::all();
        foreach ($users as $user) {
            $user_ships = Http::get('https://api.worldofwarships.com/wows/ships/stats/?application_id=67942732fd8eb7cca379240d4ee9e31e&account_id=' . $user->id)->json();

            foreach ($user_ships['data'] as $key => $value) {
                foreach ($value as $ship) {
                    $shipData = Ship::find($ship['ship_id'])->first();
                    if ($shipData) {
                        $uship = $user->ships()->wherePivot('ship_id', '=', $ship['ship_id'])->first();
                        if (!$uship) {
                            $pvp = $ship['pvp'];
                            $store = [
                                'survived_battles' => $pvp['survived_battles'],
                                'planes_killed' => $pvp['planes_killed'],
                                'battles' => $ship['battles'],
                                'max_ships_spotted' => $pvp['max_ships_spotted'],
                                'team_capture_points' => $pvp['team_capture_points'],
                                'capture_points' => $pvp['capture_points'],
                                'survived_wins' => $pvp['survived_wins'],
                                'losses' => $pvp['losses'],
                                'damage_dealt' => $pvp['damage_dealt'],
                                'max_planes_killed' => $pvp['max_planes_killed'],
                                'last_battle_time' => $ship['last_battle_time'],
                                'distance' => $ship['distance'],
                                'max_planes_killed' => $pvp['max_planes_killed'],
                                'updated_at' => $ship['updated_at'],
                                'wins' => $pvp['wins'],
                                'frags' => $pvp['frags'],
                                'max_damage_dealt' => $pvp['max_damage_dealt'],
                            ];
                            $user->ships()->attach([$ship['ship_id'] => $store]);
                            if (settings()->get('log_imports') == "true") {
                                logger('Ship added to user ' . $ship['ship_id'] . ' - ' . $user->username);
                            }
                        }
                    } else {
                        $store = [
                            'id' => $ship['ship_id'],
                            'name' => 'Test',
                            'type' => 'Test',
                            'tier_r' => 'XX',
                            'tier_n' => 20,
                            'image' => 'none',
                            'is_premium' => 0,
                            'nation' => 'ukn'
                        ];
                        Ship::updateOrCreate(['id' => $ship['ship_id']], $store);
                    }
                }
            }
        }
    }
}
