<?php

namespace App\Models;

use App\Models\Clan;
use App\Models\Ship;
use App\Models\AltUser;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasRoles, SoftDeletes;

    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $dates = [
        'u_updated_at',
        'u_created_at',
        'expires_at',
        'last_battle_time',
        'logout_at',
        'deleted_at'
    ];

    public function ships()
    {
        // return $this->belongsToMany(Ship::class)->withPivot(['ship_id', 'user_id', 'wins', 'frags', 'max_damage_dealt']);
        return $this->belongsToMany(Ship::class)->withPivot(['wins', 'frags', 'max_damage_dealt']);
    }

    public function clans()
    {
        return $this->belongsToMany(Clan::class)->withPivot('is_leader');
    }

    public function alts()
    {
        return $this->belongsToMany(AltUser::class, 'alt_user_user', 'user_id', 'alt_id')->withTimestamps();
        // return $this->belongsToMany(AltUser::class)->withTimestamps()->withPivot('alt_id');
    }


    public function getAlts($search = null)
    {
        if (!$search) {
            $alts = DB::table('alt_user_user')
                ->select()
                ->join('users', 'alt_user_user.alt_id', '=', 'users.id')
                ->where('user_id', $this->id)
                ->groupBy('users.id')->get();

            return $alts->map(function ($alt) {
                return $alt->username;
            })->implode(',');
        }

        return DB::table('alt_user_user')
            ->select()
            ->join('users', 'alt_user_user.alt_id', '=', 'users.id')
            ->where('alt_id', '=', $search)->get();
    }

    public function getAltIds()
    {
        $alts = DB::table('alt_user_user')
            ->select()
            ->join('users', 'alt_user_user.alt_id', '=', 'users.id')
            ->where('user_id', $this->id)
            ->groupBy('users.id')->get();

        return $alts->map(function ($alt) {
            return $alt->id;
        })->toArray();
    }

    public function allAlts()
    {
        return [
            'ids' => $this->getAltIds(),
            'alts' => $this->getAlts()
        ];
    }

    public function total_stats()
    {
        $data = DB::table('ship_user')
            ->selectRaw('name, sum(wins) total_wins, sum(frags) total_frags, sum(max_damage_dealt * battles) total_damage, sum(battles) total_battles, sum( average_damage_dealt * battles ) expected_total_damage, sum(average_frags) expected_total_frags, sum(win_rate) expected_total_wins')
            ->join('ships', 'ship_user.ship_id', '=', 'ships.id')
            ->where('user_id', $this->id)
            ->groupBy('ships.id')->get();
        return $data;
    }

    public function pr()
    {
        //User
        $aDmg = $this->total_stats()->total_damage;
        $aFrags = $this->total_stats()->total_frags;
        $aWins = $this->total_stats()->total_wins;

        //Expected
        $eWins = $this->total_stats()->expected_total_wins;
        $eDmg = $this->total_stats()->expected_total_damage;
        $eFrags = $this->total_stats()->expected_total_frags;

        //Real

        $rDmg = $aDmg / $eDmg;
        $rWins = $aWins / $eWins;
        $rFrags = $aFrags / $eFrags;

        //Rating formula
        $nDmg = max(0, ($rDmg - 0.4) / (1 - 0.4));
        $nFrags = max(0, ($rFrags - 0.1) / (1 - 0.1));
        $nWins = max(0, ($rWins - 0.7) / (1 - 0.7));

        //Rating
        $pr = (700 * $nDmg) + (300 * $nFrags) + (105 * $nWins);

        if ($pr <= 750) {
            $color = '#FE0E00';
        } elseif ($pr <= 1100) {
            $color = '#FE7903';
        } elseif ($pr <= 1350) {
            $color = '#FFC71F';
        } elseif ($pr <= 1550) {
            $color = '#44B300';
        } elseif ($pr <= 1750) {
            $color = '#318000';
        } elseif ($pr <= 2100) {
            $color = '#02C9B3';
        } elseif ($pr <= 2450) {
            $color = '#D042F3';
        } elseif ($pr <= 9999) {
            $color = '#A00DC5';
        }
        return ['rating' => str_replace('.', '', round($pr)), 'color' => $color];

        // Bad	0 - 750 #FE0E00
        // Below Average	750 - 1100 #FE7903
        // Average	1100 - 1350 #FFC71F
        // Good	1350 - 1550 #44B300
        // Very Good	1550 - 1750 #318000
        // Great	1750 - 2100 #02C9B3
        // Unicum	2100 - 2450 #D042F3
        // Super Unicum	2450 - 9999 #A00DC5

    }

    /**
     * Get primary role of user
     * @return string Name of role
     */
    public function primaryRole()
    {
        return ($this->roles->first()) ? $this->roles->first()->name : 'N/A';
    }

    /**
     * Get clan of user
     * @return string Name of clan
     */
    public function clan()
    {
        return ($this->clans->first()) ? $this->clans->first()->tag : 'N/A';
    }

    /**
     * Check if is leader
     * @return boolen returns true if they are a leader
     */
    public function isLeader()
    {
        return $this->clans->first()->pivot->is_leader;
    }
}
