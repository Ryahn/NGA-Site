<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    protected $guarded = [];

    public function expected()
    {
        return [
            'average_damage_dealt' => $this->average_damage_dealt,
            'average_frags' => $this->average_frags,
            'win_rate' => $this->win_rate
        ];
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot(['ship_id', 'user_id', 'wins', 'frags', 'max_damage_dealt']);
    }
    // [ship_id => [wins, frags, damage]]
    //User::find(1000670562)->ships()->sync([3530504176 => ['wins' => 11, 'frags' => 10, 'max_damage_dealt' => 12345]]);

    public function rating($user_id)
    {
        // $user_id = auth()->user()->id;
        $user = $this->users()->find($user_id)->ships->where('id','=',$this->id)->first();
        $current = [
            'wins' => $user->pivot->wins,
            'frags' => $user->pivot->frags,
            'max_damage_dealt' => $user->pivot->max_damage_dealt,
        ];

        $expected = $this->expected();

        $aDmg = $current['max_damage_dealt'];
        $eDmg = $expected['average_damage_dealt'];
        $aWins = $current['wins'];
        $eWins = $expected['win_rate'];
        $aFrags = $current['frags'];
        $eFrags = $expected['average_frags'];
        $rDmg = $aDmg/$eDmg;
        $rWins = $aWins/$eWins;
        $rFrags = $aFrags/$eFrags;
        
        $nDmg = max(0, ($rDmg - 0.4) / (1 - 0.4));
        $nFrags = max(0, ($rFrags - 0.1) / (1 - 0.1));
        $nWins = max(0, ($rWins - 0.7) / (1 - 0.7));
        
        $pr = (700 * $nDmg) + (300 * $nFrags) + (105*$nWins); 
        return str_replace('.', '', round($pr)); 
        // return $user->ships
    }
}
