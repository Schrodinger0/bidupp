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
            <div class="header__logo"><a class="ps-logo" href="index.html"><img src="images/logo.png" alt="" style=" width:70px; height:70px; margin-bottom:20px;"></a></div>
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
            <a  href="././tout">Tout Voir <img src="{{ asset('images/all.png')}}" alt="" style="height:21px;width:21px;"></a>
            <a  href="././activite">Activités <img src="{{ asset('images/activity.png')}}" alt="" style="height:21px;width:21px;"></a>
            <a class="active" href="#">Beauté <img src="{{ asset('images/beaute.png')}}" alt="" style="height:21px;width:21px;"></a>
            <a href="././formation">Formation <img src="{{ asset('images/formation.png')}}" alt="" style="height:21px;width:21px;"></a>
            <a href="././gastronomie">Gastronomie <img src="{{ asset('images/food.png')}}" alt="" style="height:21px;width:21px;"></a>
            <a href="././hotel">Hotels <img src="{{ asset('images/hotel.png')}}" alt="" style="height:21px;width:21px;"></a>
            <a href="././sport">Sport <img src="{{ asset('images/sport.png')}}" alt="" style="height:21px;width:21px;"></a>
            <a href="././shopping">Shopping <img src="{{ asset('images/shopping.png')}}" alt="" style="height:21px;width:21px;"></a>
            <a href="././ville">Ma ville <img src="{{ asset('images/map.png')}}" alt="" style="height:21px;width:21px;"></a>

      </div>
      


     
    </header>




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
      <div class="ps-section--features-product ps-section masonry-root pt-100 pb-100">
        <div class="ps-container">
          <div class="ps-section__header mb-50">
            <h3 class="ps-section__title" data-mask="Beauté">Beauté</h3>
           
          </div>
          <div class="ps-section__content pb-50">
            <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">
              <div class="ps-masonry">
                <div class="grid-sizer"></div>
             
              
                @foreach ($products as $product)
                <div class="grid-item men">
                      <div class="grid-item__content-wrapper">
                        <div class="ps-shoe mb-30">
                          <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="{{ asset('storage/'.$product->image)}}" alt="" style="height: 200px; width : 500px; "><a class="ps-shoe__overlay" href="{{ route('products.show', $product->slug) }}"></a>
                          </div>
                          <div class="ps-shoe__content">
                            <div class="ps-shoe__variants">
                              <div class="normal">
                                <p>{!!  $product->subtitle  !!}</p>  
                              </div>
                              <p>{{ $product->created_at->format('d/m/y') }}</p>
                            </div>
                            <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">{{ $product->title }}</a>
                              <p class="ps-shoe__categories"></p><span class="ps-shoe__price"> <del>{{ $product->price }}</del>  .Dt</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                @endforeach
          
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="paginationnn" style="margin-left:85%;margin-top:-130px;">
        {{ $products->appends(request()->input())->links() }}
       </div>
      @endsection