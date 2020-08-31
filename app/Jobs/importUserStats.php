<?php

namespace App\Jobs;

use App\Models\Clan;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class importUserStats implements ShouldQueue
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
        $clans = Clan::all();

        foreach ($clans as $clan) {
            $members = implode(',', $clan['members']);
            $api = "https://api.worldofwarships.com/wows/account/info/?application_id=67942732fd8eb7cca379240d4ee9e31e&account_id=$members";
            $member_data = Http::get($api)->json();
            foreach ($member_data['data'] as $key => $value) {

                $store = [
                    'last_battle_time' => $value['last_battle_time'],
                    'u_created_at' => $value['created_at'],
                    'u_updated_at' => $value['updated_at'],
                    'hidden_profile' => $value['hidden_profile'],
                    'logout_at' => $value['logout_at'],
                    'leveling_tier' => $value['leveling_tier'],
                    'total_battles' => (isset($value['statistics']['battles']) ? $value['statistics']['battles'] : 0),
                    'survived_battles' => (isset($value['statistics']['pvp']['survived_battles']) ? $value['statistics']['pvp']['survived_battles'] : 0),
                    'survived_wins' => (isset($value['statistics']['pvp']['survived_wins']) ? $value['statistics']['pvp']['survived_wins'] : 0),
                    'total_frags' => (isset($value['statistics']['pvp']['frags']) ? $value['statistics']['pvp']['frags'] : 0),
                    'max_frags_battle' => (isset($value['statistics']['pvp']['max_frags_battle']) ? $value['statistics']['pvp']['max_frags_battle'] : 0),
                    'total_wins' => (isset($value['statistics']['pvp']['wins']) ? $value['statistics']['pvp']['wins'] : 0),
                    'total_losses' => (isset($value['statistics']['pvp']['losses']) ? $value['statistics']['pvp']['losses'] : 0),
                    'total_damage_dealt' => (isset($value['statistics']['pvp']['damage_dealt']) ? $value['statistics']['pvp']['damage_dealt'] : 0),
                    'max_planes_killed' => (isset($value['statistics']['pvp']['max_planes_killed']) ? $value['statistics']['pvp']['max_planes_killed'] : 0),
                    'total_planes_killed' => (isset($value['statistics']['pvp']['planes_killed']) ? $value['statistics']['pvp']['planes_killed'] : 0),
                ];
                User::where('id', $key)->update($store);
                if (settings()->get('log_imports') == "true") {
                    logger("Updated user" . $key);
                }
            }
        } //End
    }
}
