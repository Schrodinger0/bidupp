@extends('layouts.master')

@section('content')

    <header class="header">
      <div class="header__top">
        <div class="container-fluid">
      
        </div>
      </div>
      <nav class="navigation">
        <div class="container-fluid">
          <div class="navigation__column left">
            <div class="header__logo"><a class="ps-logo" href="index.html"><img src="{{ asset('images/logo.png')}}" alt="" style=" width:70px; height:70px; margin-bottom:20px;"></a></div>
          </div>
          <div class="navigation__column center">
            
            </div>
          <div class="navigation__column right">
            @include('partials.search')

            <div class="ps-cart"><a class="ps-cart__toggle" href="{{ route('cart.index') }}"><span><i>{{Cart::count()}}</i></span><i class="fa fa-trophy" aria-hidden="true"></i></a>
            </div>

        </div>
        <div class="degl" style="position: absolute; margin-left:70%; margin-top:2%; width:400px;">
          @include('partials.auth')
        </div>
      </nav>

      <div class="topnav">
              <a  href="././">Acceuil <img src="{{ asset('images/home.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a href="././tout">Tout Voir <img src="{{ asset('images/all.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a href="././activite">Activités <img src="{{ asset('images/activity.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a href="././beaute">Beauté <img src="{{ asset('images/beaute.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a href="././formation">Formation <img src="{{ asset('images/formation.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a href="././gastronomie">Gastronomie <img src="{{ asset('images/food.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a href="././hotel">Hotels <img src="{{ asset('images/hotel.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a href="././sport">Sport <img src="{{ asset('images/sport.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a href="././shopping">Shopping <img src="{{ asset('images/shopping.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a href="././ville">Ma ville <img src="{{ asset('images/map.png')}}" alt="" style="height:21px;width:21px;"></a>

        

      </div>

      


    </header>
    <div class="header-services">
      <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
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
                
             
                    

     
                
                    </div>
                  </div>
                </div>
              </div>
            </div>

   
         
          
      
      </div>
@endsection