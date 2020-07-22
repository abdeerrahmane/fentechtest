<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
	//
	protected $fillable = [
        'type_menu'
	];
	
    public function contenus()
	{
		return $this->hasMany('App\Contenu');
	}
	public function menu()
	{
		return $this->belongsTo('App\Type');
	}
}
