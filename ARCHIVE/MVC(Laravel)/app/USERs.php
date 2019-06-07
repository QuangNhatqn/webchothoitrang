<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class USERs extends Model
{
    //
    protected $table = "USERs";

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
