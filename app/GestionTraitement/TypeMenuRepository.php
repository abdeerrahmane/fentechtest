<?php

namespace App\GestionTraitement;


use App\Menu;
use App\User;

class TypeMenuRepository
{

    protected $menu;

    public function __construct(Menu $menu )
	{
		$this->menu = $menu;
	}

	

}