@extends('layouts.app')

@section('content')
<h1> C'est le menu </h2>
<div class="mt-5">
   
	
    <form method="POST" action="{{route('menus.store')}}">
       {{ csrf_field() }}

            <div class="form-group {{ $errors->has('titre_menu') ? ' has-error' : '' }}">
                <label for="titre_menu">Titre </label>
                <input  name="titre_menu" type="text" class="form-control" id="titre_menu" >
                <small id="titre_menu" class="form-text text-muted">Ecrire Titre Ici</small>
                @if ($errors->has('titre_menu'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('titre_menu') }}</strong>
                                    </span>
                 @endif
            </div>
            <button type="submit" class="btn btn-primary">Create</button>

    </form>

</div>
@endsection