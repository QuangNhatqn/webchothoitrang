<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SERVICESs extends Model
{
    //
    protected $table = "SERVICESs";

    public function servicetradings()
    {
    	return $this->hasMany('App\SERVICETRADINGs', 'ServiceIDs', 'id');
    }
}
