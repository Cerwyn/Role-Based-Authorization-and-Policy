<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $guarded = [];
    protected $table = 'permissions';

    public function profiles()
    {
        return $this->belongsToMany('App\Profile')->withTimestamps();
    }
}
