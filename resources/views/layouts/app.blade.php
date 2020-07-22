<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
     <link rel="stylesheet" href=" {{ asset('bootstrap/dist/css/bootstrap.css') }}">
     <link rel="stylesheet" href=" {{ asset('font-awesome/css/font-awesome.css') }}">
  
     <link rel="stylesheet" href="{{ asset('bootstrap-social/bootstrap-social.css')}}">
     <link href=" {{ asset('css/style3.css') }}" rel="stylesheet">
    
    
</head>
<body>
<nav class="navbar navbar-dark navbar-expand-sm  fixed-top">
        <div class="container">
           <a class="navbar-brand mr-auto " href="./index.html">  <img src="img/logo.png" height="30" width="41"> </a>

           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                 <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                @if (Auth::guest())
                    <li class="nav-item active"><a class="nav-link" href="#"> <span class="fa fa-home fa-lg"> </span> Acceuil</a></li>
                @else    
                     <li class="nav-item active"><a class="nav-link" href="#"> <span class="fa fa-home fa-lg"> </span> Home</a></li>
                @endif
                    <li class="nav-item"><a class="nav-link" href="./aboutus.html"> <span class="fa fa-info fa-lg"></span> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-list fa-lg"></span> Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="./contactus.html"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
                </ul>   
                <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a class="btn nav-link" href="{{ route('login') }}"><span class="fa fa-sign-in" ></span>  Login</a></li>
                            <li><a class="btn nav-link" href="{{ route('register') }}"><span class="fa fa-pencil-square-o" ></span>  Register</a></li>
                            
                        @else
                        
                            <li class="nav-item dropdown">
                                <a class=" btn nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fa fa-user" ></span> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <a class="btn" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <span class="fa fa-sign-out" ></span>  Logout           
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
            </div>         
           </div>
        </div>
    </nav>
    <header class="jumbotron">
        <div class="container">
            <div class="row row-header" >
                <div class="col-12 col-sm-6">
                    <h1>Ristorante con Fusion</h1>
                    <p>We take inspiration from the World's best cuisines, and create a unique 
                        fusion experience. Our lipsmacking creations will tickle your culinary
                         senses!
                    </p>
                </div>
                <div class="col col-sm align-self-center">
                    <div class="col-12 col-sm align-self-center">
                        <div class="row">
                            <div class="col-12 col-md-6 align-self-center">
                                <img src="img/logo.png" class="img-fluid">
                            </div>
                            <div class="col-12 col-md-6 ">
                               <a><button type="button" class="btn btn-warning btn-lg btn-block" id="aabdo" >Ajouter Menu </button></a>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
        <div class="container">
            @yield('content')
        </div>
   
    <!-- Scripts -->
    
    <footer class="footer mt-3">
        <div class="container-fluid">
            <div class="row ">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="./index.html">Home</a></li>
                        <li><a href="./aboutus.html">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="./contactus.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
		              121, Clear Water Bay Road<br>
		              Clear Water Bay, Kowloon<br>
		              HONG KONG<br>
		              <i class="fa fa-phone fa-lg"></i>+852 1234 5678<br>
                      <i class="fa fa-fax fa-lg"></i> +852 8765 4321<br>
		              <i class="fa fa-envelope fa-lg"></i> <a href="mailto:confusion@food.net">confusion@food.net</a>
		           </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a  class="btn btn-social-icon btn-google"   href="http://google.com/+"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a  class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg "></i></a>
                        <a class="btn btn-social-icon btn-twitter"  href="http://twitter.com/"><i class="fa fa-twitter fa-lg "></i></a>
                        <a class="btn btn-social-icon btn-youtube"  href="http://youtube.com/"><i class="fa fa-youtube fa-lg "></i></a>
                        <a class="btn btn-social-icon " href="mailto:"><i class="fa fa-envelope fa-lg "></i></a>
                    </div>
                </div>
             </div>
           <div class="row justify-content-center">             
                <div class="col-auto ">
                    <p>© Copyright 2018 Ristorante Con Fusion</p>
                </div>
           </div>
        </div>
    </footer>
   
</body>

    <script src="{{ asset('jquery/dist/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
    



    <script>
       
       $("#mycarousel").carousel( { interval:2000 } );
       $("#carouselButton").click(function(){
           if( $("#carouselButton").children("span").hasClass('fa-pause')){
               $("#mycarousel").carousel('pause');
               $("#carouselButton").children("span").removeClass('fa-pause');
               $("#carouselButton").children("span").addClass('fa-play');
    
           }
         else
             if( $("#carouselButton").children("span").hasClass('fa-play')){
               $("#mycarousel").carousel('cycle');
               $("#carouselButton").children("span").removeClass('fa-play');
               $("#carouselButton").children("span").addClass('fa-pause');
    
           }    
   });

   $("#aabdo").click(function()
   {
       $('#abdo').modal('show');
       
   });
   $("#cancel").click(function()
   {
       $('#abdo').modal('hide');
       
   });
   $("#aaabdo").click(function(){
        $('#loginModal').modal('show');
   });
   $("#cancel1").click(function(){
        $('#loginModal').modal('hide');
   });
  
 
  
</script>
@yield('scripts')



</html>
