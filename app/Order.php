<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded=[];

    public function by(){
    	return $this->belongsTo(\App\User::class,'ordering_id');
    } 

     public function to(){
    	return $this->belongsTo(\App\User::class,'service_owner');
    } 
        public function service(){
    	return $this->belongsTo(\App\Service::class,'service_id');
    }
}
