<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MenuCreateRequest;
use App\GestionTraitement\MenuRepository;

use App\Menu ;
class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $menuRepository;


    public function __construct(MenuRepository $menuRepository)
    {
        $this->menuRepository = $menuRepository;
        
        $this->middleware('auth');

    }
    

    public function index()
    {
    
        $menus=auth()->user()->menus()->get();
        return view('menus.index',['menus'=>$menus]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        $menus=auth()->user()->menus()->get();
        return view('menus.create',['menus'=>$menus]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuCreateRequest $request)
    {
        //
        
        $menu = $this->menuRepository->store($request->all());
       //$menu_id = Menu::where(''$inputs['titre_menu'])->first()->id;
		$user = auth()->user();
        $user->menus()->attach($menu->id);
        $menus=auth()->user()->menus()->get();
        return view('menus.index',['menus'=>$menus]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $menu = Menu::findOrFail($id);
        return view('menus.show',['menu'=>$menu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
