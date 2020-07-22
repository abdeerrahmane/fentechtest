<?php

namespace App\GestionTraitement;


use App\Menu;
use App\User;

class MenuRepository
{

    protected $menu;

    public function __construct(Menu $menu )
	{
		$this->menu = $menu;
	}

	private function save(Menu $menu, Array $inputs)
	{
		$menu->titre_menu = $inputs['titre_menu'];
		$menu->save();
	}

	public function store(Array $inputs)
	{
		$menu = new $this->menu;		
		$this->save($menu, $inputs);

		return $menu;
	}

	public function getById($id)
	{
		return $this->menu->findOrFail($id);
	}

	public function update($id, Array $inputs)
	{
		$this->save($this->getById($id), $inputs);
	}

	public function destroy($id)
	{
		$this->getById($id)->delete();
	}
	public function getUserbyId($id)
	{
        
	 	return User::findOrFail($id);	
	}

}