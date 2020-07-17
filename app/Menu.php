<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    //
    public function contenu()
	{
		return $this->hasMany('App\Contenu');
    }
    public function user()
	{
		return $this->belongsToMany('App\User');
	} 

}
