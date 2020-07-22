
@extends('layouts.app')
@section('content')
<div class="row mt-5">
         <div class="col-6">
         <h2> Voici Les Types du Votre Menu <h2>  
           
         </div>   
         <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Ajouter Contenu
                </div>
                <div class="card-body">
                   <form method="POST" action=" {{route('contenus.store')}}" enctype="multipart/form-data">
                   {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Votre menu </label>
                            <input name="menu" class="form-control" id="exampleFormControlInput1"  Disabled  >
                        </div>
                        <div class="form-group">
                            <label class="my-1 mr-2" for="" >Choisir menu </label>
                           
                                <select name="menus"  class="custom-select my-1 mr-sm-2" id="menusabdo">
                                  
                                    <option value="0" disable="true" selected="true">=== Select menu ===</option>
                                    @foreach($menus as $menu)
                                    <option value="{{$menu->id}}">{{ $menu->titre_menu }}</option>
                                    @endforeach
                                </select>
                         
                        </div>
                        <div class="form-group">
                            <label class="my-1 mr-2" for="" >Choisir Type </label>
                                <select name="types"  class="custom-select my-1 mr-sm-2" id="types">
                                 <option value="0" disable="true" selected="true">=== Select Type ===</option>

                 
                              
                                </select>
                         
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                 <label for="contenu">Contenu </label>  
                                 <input name="contenu" type="text" class="form-control" id="contenu" placeholder="Ecrire Contenu Ici">
                            </div>
                            <div class="col">
                                  <label for="contenu">Prix </label>  
                                 <input name="prix" type="number" step="any" class="form-control" placeholder="Prix du contenu ">
                            </div>
                        </div>
                        <p>
                        <a class="btn btn-outline-success" data-toggle="collapse"  href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                          <span class="fa fa-file-image-o"></span> Photo 
                        </a>
                        </p>
                        <div class="collapse" id="collapseExample">
                        <div class="form-group">
                                <label for="exampleFormControlFile1">Example file input</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </form>

                </div>
             </div>
         </div>
</div>

@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
       $('#menusabdo').on('change', function(e){
          console.log(e);
         var menu_id = e.target.value;

         $.get('/ajax-types?menu_id='+ menu_id ,function(data) {
           console.log(data);
            $('#types').empty();
            $('#types').append('<option value="0" disable="true" selected="true">=== Select types ===</option>');
            $.each(data, function(index, typesObj){
            $('#types').append('<option value="'+ typesObj.id +'">'+ typesObj.name +'</option>');
          });
        });
       }); 
</script>
@endsection