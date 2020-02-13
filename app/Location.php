<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $guarded=[];


    //users
    public function users() {
    	return $this->hasMany(\App\User::class);
    }
}
