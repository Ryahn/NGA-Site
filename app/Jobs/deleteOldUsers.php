<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class deleteOldUsers implements ShouldQueue
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
            $api = Http::get("https://api.worldofwarships.com/wows/clans/accountinfo/?application_id=67942732fd8eb7cca379240d4ee9e31e&account_id=" . $user->id)->json();
            foreach ($api['data'] as $key => $value) {
                if (!$value['clan_id']) {
                    if (settings()->get('log_imports') == "true") {
                        logger('User deleted: ' . $user->id . ' - ' . $user->username);
                    }
                    $user->delete();
                }
            }
        }
    }
}
