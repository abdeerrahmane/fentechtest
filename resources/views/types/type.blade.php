
@extends('layouts.app')

@section('content')

<div class="row mt-5">
         <div class="col-6">
                @foreach($menus as $menu)
                    <h6>titre menu : {{$menu->titre_menu }} </h6>
                     @foreach($menu->types as $type)
                  
                        <ul> type : {{ $type->type_menu }}</ul>       
                                    
                     @endforeach
                 @endforeach
         </div>   
</div>
@endsection