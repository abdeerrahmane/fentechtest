<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contenu extends Model
{
    //
    public function menu()
	{
		return $this->belongsTo('App\Menu');
    }
    public function type()
	{
		return $this->belongsTo('App\Type');
    }
    public function photo()
	{
		return $this->belongsTo('App\Photo');
	}
}
