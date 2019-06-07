<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

        public function postings()
    {
        return $this->hasMany('App\POSTINGs', 'UserIDs', 'id');
    }
    public function servicetradings()
    {
        return $this-> hasManyThrough('App\SERVICETRADINGs', 'App\POSTINGs', 'UserIDs', 'PostingIDs', 'id');
    }
    public function cointradings()
    {
        return $this-> hasMany('App\COINTRADINGs', 'UserIDs', 'id');
    }


}
