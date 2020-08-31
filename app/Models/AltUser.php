<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\Pivot;

class AltUser extends Model
{
    protected $guarded = [];
    public $incrementing = false;
    public $timestamps = true;


    public function user()
    {
        return $this->belongsToMany(User::class, 'users', 'id', 'alt_id')->withTimestamps();
    }
}
