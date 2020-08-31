<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Clan extends Model
{
    protected $guarded = [];

    protected $casts = [
        'members' => 'array',
    ];

    protected $dates = [
        'c_updated_at',
        'c_created_at',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot(['clan_id', 'user_id', 'is_leader']);
    }

}
