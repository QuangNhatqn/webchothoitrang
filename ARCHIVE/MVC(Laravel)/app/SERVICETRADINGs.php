<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SERVICETRADINGs extends Model
{
    //
    protected $table = "SERVICETRADINGs";

    public function postings()
    {
    	return $this-> belongsTo('App\POSTINGs', 'PostingIDs', 'id');
    }
    public function services()
    {
    	return $this-> belongsTo('App\SERVICESs', 'ServiceIDs', 'id');
    }
}
