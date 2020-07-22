<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	//
	
	public $timestamps = true;
	
	protected $fillable = [
        'titre_menu'
    ];

 	public function types()
	{
		return $this->hasMany('App\Type');
	}
	
    public function users()
	{
		return $this->belongsToMany('App\User');
	} 
	


    

}
