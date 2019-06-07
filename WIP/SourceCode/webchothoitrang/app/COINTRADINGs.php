<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class COINTRADINGs extends Model
{
    //
    protected $table = "COINTRADINGs";
    public function users()
    {
    	return $this-> belongsTo('App\USERs', 'UserIDs', 'id');
    }
}
