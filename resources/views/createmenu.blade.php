@extends('layouts.app')

@section('content')
<h1> C'est le menu </h2>
<h1>  {{ Auth::user()->name }}:{{ Auth::user()->id }}  </h2>
	
    <form method="POST" action="{{route('menu.store')}}">
       {{ csrf_field() }}

            <div class="form-group {{ $errors->has('titre_menu') ? ' has-error' : '' }}">
                <label for="titre_menu">Titre </label>
                <input  name="titre_menu" type="text"  class="form-control" id="titre_menu" >
                <small id="titre_menu"  class="form-text text-muted">Ecrire Titre Ici</small>
                @if ($errors->has('titre_menu'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('titre_menu') }}</strong>
                                    </span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Create</button>

    </form>


@endsection