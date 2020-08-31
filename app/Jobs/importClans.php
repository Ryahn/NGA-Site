<?php

namespace App\Jobs;

use App\Models\Clan;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class importClans implements ShouldQueue
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
        $clan_ids = unserialize(settings()->get('clan_id'));

        foreach ($clan_ids as $clan) {
            $clan_data = Http::get('https://api.worldofwarships.com/wows/clans/info/?application_id=67942732fd8eb7cca379240d4ee9e31e&clan_id=' . $clan)->json();
            $data = $clan_data['data'];

            foreach ($data as $key => $value) {
                $store = [
                    'id' => $value['clan_id'],
                    'name' => $value['name'],
                    'creator_name' => $value['creator_name'],
                    'c_created_at' => $value['created_at'],
                    'c_updated_at' => $value['updated_at'],
                    'leader_name' => $value['leader_name'],
                    'leader_id' => $value['leader_id'],
                    'creator_id' => $value['creator_id'],
                    'tag' => $value['tag'],
                    'members' => $value['members_ids'],
                ]; //Store Array
            } //Second Foreach
            $clan = Clan::updateOrCreate(['id' => $store['id']], $store);
            if (settings()->get('log_imports') == "true") {
                logger('Clan added/updated ' . $clan->id . ' - ' . $clan->name);
            }

            foreach ($clan->members as $member) {
                $member_data = Http::get('https://api.worldofwarships.com/wows/account/info/?application_id=67942732fd8eb7cca379240d4ee9e31e&account_id=' . $member)->json();

                foreach ($member_data['data'] as $key => $value) {
                    $password = Hash::make(str_random(16));
                    $store = [
                        'id' => $member,
                        'username' => $value['nickname'],
                        'password' => $password
                    ];
                    $u = User::updateOrCreate(['id' => $member], $store);
                    if ($member === $clan->leader_id) {
                        $u->clans()->sync([$clan->id => ['is_leader' => 1]]);
                        logger('Leader added to clan sync ' . $u->id . ' - '. $u->username);
                    }
                    $u->clans()->sync($clan->id);
                    if (settings()->get('log_imports') == "true") {
                        logger('User added to clan sync ' . $u->id . ' - '. $u->username);
                    }
                }
            }
        } //First Foreach

    }
}
