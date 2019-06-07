<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class POSTINGs extends Model
{
    //
    protected $table = "POSTINGs";
    public function users()
    {
    	return $this->belongsTo('App\USERs', 'UserIDs', 'id');
    }
    public function servicetradings()
    {
    	return $this->hasMany('App\SERVICETRADINGs', 'PostingIDs', 'id');
    }
}
