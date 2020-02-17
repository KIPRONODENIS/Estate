<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded=[];

        //user and services 
    public function users() {
        return $this->belongsToMany(\App\User::class)->withPivot('details');
    }

    public function orders() {
    	return $this->hasMany(\App\Order::class,'service_id');
    }
}
