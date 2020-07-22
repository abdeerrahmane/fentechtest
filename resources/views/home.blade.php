@extends('layouts.app')

@section('content')

    <div class="row">
       <div class="card">
           <div class="card-header">
           <h2>Dashboard </h2>
           </div>
            <div class="card-body">
                <h5 class="card-title"> 
                @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif</h5>
                <p class="card-text"> You are logged in!</p>

            </div>
       </div>

       
    </div>

@endsection
