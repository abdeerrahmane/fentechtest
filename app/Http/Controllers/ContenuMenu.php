<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

use App\Http\Requests\CreateContenuRequest;
use Illuminate\Http\Request;

use App\Menu ;
use App\Contenu;
use App\Type;

class ContenuMenu extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {   
        $menus=auth()->user()->menus()->get();
        return view('contenus.create',['menus'=>$menus]);
    }
    public function create()
    {
      
        $menus=auth()->user()->menus()->get();
        return view('contenus.create',['menus'=>$menus]);

    }
    public function menus(){
        $menu_id = Input::get('menu_id');
        dd($menu);
        $types = Type::where('menu_id', '=', $menu_id)->get();
        return response()->json('hhhhhhhhhhhh');
      }

    public function store(CreateContenuRequest $request)
    {

        $contenu = new Contenu();
        dd('abderrahmane');

    }
   
}
