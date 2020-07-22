@extends('layouts.app')

@section('content')
<h1> C'est le menu </h2>
<h1> Voici Votre Nom : {{ Auth::user()->name }}  </h2>
	


<div class="card">
  <div class="card-header">
    <h2> Menu :  {{ $menu->titre_menu }} <h2>  
  </div>

    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="{{route('types.create')}}" class="btn btn-primary">Ajouter Type</a>
    </div>
    
 </div> 

@endsection