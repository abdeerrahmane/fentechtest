<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\TypeMenuCreateRequest;
use App\Http\Requests\ImageRequest;


use App\Menu ; 
use App\Type ; 


class TypeMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {      
        
        return view('types.type');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        
        $menus=auth()->user()->menus()->get();
        return view('types.create' ,['menus'=>$menus]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TypeMenuCreateRequest $request  )
    {
        //

       $type = new Type();
       $type->menu_id = $request->menu_id ;
       $type->type_menu = $request->type_menu ;
       $image = $request->photo ; 
       
       if($request->hasFile('photo'))
        {
         $type->photo = $image->store('photo');
        }
        $menu = auth()->user()->menus()->get();
        $type->save();
    
       

       return view('types.create',['menus'=>$menu]);     
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
        $type = Type::findOrFail($id);
        $menu = Menu::findOrFail($type->menu_id);
        return view('types.show' , ['menu'=>$menu , 'type'=>$type]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $type= Type::findOrFail($id);
         $menu = Menu::findOrFail($type->menu_id);
         $menus = Menu::all();
         return view('types.edit',['type'=>$type , 'menus'=>$menus , 'menu'=>$menu]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TypeMenuCreateRequest $request, $id)
    {
        //
        $type = Type::findOrFail($id);
        $type->menu_id = $request->menu_id ;
        $type->type_menu = $request->type_menu ;
        $image = $request->photo ; 
        if($request->hasFile('photo'))
         {
           $type->photo = $image->store('images');
         }
        $type->save();
        return redirect()->route('types.create');    

         
        
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
        $type = Type::findOrFail($id);
        $type->delete();
        return redirect()->route('types.create');   
    }
}
