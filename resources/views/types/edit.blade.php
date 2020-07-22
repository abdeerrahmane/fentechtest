
@extends('layouts.app')

@section('content')
<div class="row mt-5">
                <div class="col-6">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Type {{ $type->type_menu}}</h5>
                                <p class="card-text">Cette type est dans le menu {{$menu->titre_menu}}</p>
                                <p class="card-text text-center text-muted"><small class="text-muted">{{$type->updated_at}}</small></p>
                           </div>
                      </div>
                </div>
                <div class="col-6">
                     <div class="card">
                    <div class="card-header bg-secondary text-white">
                        modifier cette Type  
                    </div>
                    
                    <div class="card-body bg-light">
                            <form method="POST" action="{{route('types.update',['type'=>$type->id])}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}  
                    
                                    <div class="form-group {{ $errors->has('type_menu') ? ' has-error' : '' }}">
                                        <label for="type_menu"> Type  </label>
                                        <input  name="type_menu" value="{{$type->type_menu}}" type="text" class="form-control" id="type_menu" >
                                        <small id="type_menu" class="form-text text-muted">Ecrire votre nouvelle type</small>
                                        @if ($errors->has('type_menu'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('type_menu') }}</strong>
                                                            </span>
                                        @endif
                                        
                                    </div>
                                    
                                    <div class="form-group">
                                            <label for="exampleFormControlFile1"> Ajouter image du type</label>
                                            <input name="photo" type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                            
                                    <div class="form-group">
                                        <label for="inputState"> Choix Menu </label>
                                            <select name="menu_id" id="inputState" class="form-control">
                                            @foreach($menus as $menu)
                                            
                                            <option value="{{$menu->id}}" >{{$menu->titre_menu}}</option>
                                            @endforeach 
                                            </select>
                                    </div>
                                    
        
                            <button type="submit" class="btn btn-success pull-right">Ajouter </button>
                            </form>
                    </div>
               </div>
         </div>
</div>
</div>
@endsection