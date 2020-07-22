@extends('layouts.app')
@section('content')


   
    <div class="row mt-5">
         <div class="col-6">
               
            @foreach($menus as $menu)
                   <table class="table mt-2">
                
                        <thead>
                            <tr>
                                <th scope="col">{{$menu->id}}</th>
                                <th scope="col">{{$menu->titre_menu}}</th>
                                <TH scope="col">Action </TH>
                            </tr>
                        </thead>
                <tbody> 
                @foreach($menu->types as $type)
                    <tr>
                        <th scope="row">{{ $type->type_menu }}  </th>
                        <td> <img src="{{asset('storage/App/images/'.$type->photo)}}" alt="image {{ $type->type_menu }}"/></td>
                          
                          <td>
                                <a class="btn btn-info" href="{{route('types.show',['type'=>$type->id])}} " role="button">Contenu</a>
                                <a class="btn btn-primary" href="{{route('types.edit',['type'=>$type->id])}} " role="button">Edit</a>
                                    <form style="display : inline" method="POST" onclick=" return confirm('vous etez sur ?')" action="{{route('types.destroy',['type'=>$type->id])}}">
                                        
                                        {{ csrf_field() }}
                                        {{ method_field('Delete') }} 
                                        <button type="submit"  class="btn btn-danger" >Delete</button>
                                    </form>
                           </td>
                     </tr>
               @endforeach
          </tbody>
        </table>
        @endforeach

         </div>   
         <div class="col-6">
            <div class="card">
                    <div class="card-header bg-secondary text-white">
                        Ajouter Type au Menu 
                    </div>
                    
                    <div class="card-body bg-light">
                            <form method="POST" action="{{route('types.store')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                    
                                    <div class="form-group {{ $errors->has('type_menu') ? ' has-error' : '' }}">
                                        <label for="type_menu"> Type  </label>
                                        <input  name="type_menu" type="text" class="form-control" id="type_menu" >
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