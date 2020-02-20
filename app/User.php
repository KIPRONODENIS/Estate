<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','location_id',
    ];

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

    //user and services 
    public function services() {
        return $this->belongsToMany(\App\Service::class)->withPivot('details');
    }

    //location 
    public function location() {
        return $this->belongsTo(\App\Location::class);
    }
//sent orders
    public function sents() {
        return $this->hasMany(\App\Order::class,'ordering_id');
    }

    //recieved orders
    public function rorders() {
        return $this->hasMany(\App\Order::class,'service_owner');
    }
}
