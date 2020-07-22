@extends('layouts.app')

@section('content')
<h1> C'est le menu </h2>
<div class="mt-5">
                   
       <table class="table mt-2">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Posted By</th>
                        <th scope="col">Created at</th>
                        <TH scope="col">Action </TH>
                    </tr>
                </thead>
                <tbody>
                @foreach ($menus as $menu)
                    <tr>
                        <th scope="row">{{ $menu->id}} <br>  </th>
                        <td>{{$menu->titre_menu }} </td>
                        <td>{{date('Y-m-d', strtotime($menu->created_at))}} </td>
                        
                        <td>{{date('Y-m-d', strtotime($menu->updated_at))}} </td>
                     
                        <td>
                           <a class="btn btn-info" href="{{route('menus.show', ['menu'=>$menu->id])}} " role="button"> Acceder</a>
                           <a class="btn btn-primary" href="{{route('menus.edit',['menu'=>$menu->id])}} " role="button">Edit</a>
                           <form style="display : inline" method="POST" action="{{route('menus.destroy',['menu'=>$menu->id])}})">
                             
                                {{ csrf_field() }}
                                {{ method_field('Delete') }} 

                                <button type="submit"  class="btn btn-danger" >Delete</button>
                           </form>
                        </td>
                    </tr>
                @endforeach       
            </tbody>
        </table>
     </div>
	 <div id="abdo" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ajouter Menu </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                          
             <form method="POST" action="{{route('menus.store')}}">
                  {{ csrf_field() }}
            
                 <div class="form-group {{ $errors->has('titre_menu') ? ' has-error' : '' }}">
                   <label for="titre_menu">Titre menu </label>
                   <input  name="titre_menu" type="text" class="form-control" id="titre_menu" >
                    <small id="titre_menu" class="form-text text-muted">Tapez titre de votre menu</small>
                       @if ($errors->has('titre_menu'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('titre_menu') }}</strong>
                                    </span>
                       @endif
                 </div>
                 <button type="button" class="btn btn-primary pull-right" id="cancel">Cancel</button>
                 <button type="submit" class="btn btn-secondary pull-right"> Ajouter </button>
         
            

    </form>
                </div>
            </div>
        </div>
    </div>
    


@endsection