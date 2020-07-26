@extends('layouts.master')

<style>.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  margin: auto;
  text-align: center;
}

.title {
  color: grey;
  font-size: 18px;
}

#dashya7ajneedsaclass {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

#thebutton {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a { 
  text-decoration: none;
  font-size: 22px;
  color: black;
}

#dashya7ajneedsaclass:hover, a:hover {
  opacity: 0.7;
}
#thebutton:hover, a:hover {
  opacity: 0.7;
}</style>

@section('content')
    <header class="header">
      <div class="header__top">
        <div class="container-fluid">
       
        </div>
      </div>
      <nav class="navigation">
        <div class="container-fluid">
          <div class="navigation__column left">
            <div class="header__logo"><a class="ps-logo" href="{{ route('welcome') }}"><img src="{{ asset('images/logo.png')}}" alt="" style=" width:70px; height:70px; margin-bottom:20px;"></a></div>
          </div>
          <div class="navigation__column right">
            @include('partials.search')
            <div class="ps-cart"><a class="ps-cart__toggle" href="{{ route('cart.index') }}"><i class="fa fa-trophy" aria-hidden="true"></i></a>
              <div class="drop2down">
            <button class="drop2btn"><span class="caret"></span></button>
            <div class="drop2down-content" >
            @include('partials.auth')
            </div>
            </div>
            </div>
        </div>
      </nav>

      <div class="topnav" id="myTopnav">
        <a href="javascript:void(0);" class="home" onclick="myFunction()">Menu</a> 
        <a  href="{{ route('welcome') }}">home <img src="{{ asset('images/home.png')}}" alt="" style="height:21px;width:21px;"></a>
        <a  href="{{ route('products.index') }}">See All <img src="{{ asset('images/all.png')}}" alt="" style="height:21px;width:21px;"></a>
        <a  href="{{ route('products.activite') }}">Activities <img src="{{ asset('images/activity.png')}}" alt="" style="height:21px;width:21px;"></a>
        <a  href="{{ route('products.beaute') }}">Beauty <img src="{{ asset('images/beaute.png')}}" alt="" style="height:21px;width:21px;"></a>
        <a  href="{{ route('products.formation') }}">Courses <img src="{{ asset('images/formation.png')}}" alt="" style="height:21px;width:21px;"></a>
       <a  href="{{ route('products.gastronomie') }}">Gastronomy <img src="{{ asset('images/food.png')}}" alt="" style="height:21px;width:21px;"></a>
       <a href="{{ route('products.hotel') }}">Hotels <img src="{{ asset('images/hotel.png')}}" alt="" style="height:21px;width:21px;"></a>
       <a  href="{{ route('products.sport') }}">Sport <img src="{{ asset('images/sport.png')}}" alt="" style="height:21px;width:21px;"></a>
        <a href="{{ route('products.shopping') }}">Shopping <img src="{{ asset('images/shopping.png')}}" alt="" style="height:21px;width:21px;"></a>
        <a href="{{ route('products.ville') }}">My City <img src="{{ asset('images/map.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>

            </div>
            
            <script>
                      /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
              function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                  x.className += " responsive";
                } else {
                  x.className = "topnav";
                }
              }
            </script>
    </header>
    <div class="header-services">
      <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Bidup</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Bidup</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Bidup</p>
      </div>
    </div>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
      <ul class="mb-0 mt-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
@endif


    <main class="ps-main">
        <main class="ps-main">
            <div class="ps-section--features-product ps-section masonry-root pt-100 pb-100">
              <div class="ps-container">
                <div class="ps-section__header mb-50">
                  <h3 class="ps-section__title" data-mask="Profile">Profile</h3>
                
             

<div class="card" style="padding-top:50px; width:400px;">

<img src="{{ asset('storage/'.Auth::user()->avatar)}}" alt="Avatar" style="  border-radius: 50%; width:150px; heigt:150px;">

  <h1> {{ Auth::user()->name }}</h1>
  <p class="title"> {{ Auth::user()->email }}</p>
  <p>{{ Auth::user()->role->display_name }}</p>
  <p><p id="samir"></p></p>
<p><button id="thebutton" onclick="window.location.href='../update'">Update Info</button></p>
</div>

     
                
                    </div>
                  </div>
                </div>
              </div>
            </div>

   
         
          
      
      </div>
@endsection