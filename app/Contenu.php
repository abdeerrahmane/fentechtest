<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contenu extends Model
{
    //
    
   
    public function type()
	{
		return $this->belongsTo('App\Type');
    }
    public function photo()
	{
		return $this->belongsTo('App\Photo');
	}
}
