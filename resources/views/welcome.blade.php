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
            <a class="active" href="#">Acceuil <img src="{{ asset('images/home.png')}}" alt="" style="height:21px;width:21px;"></a>
        <a  href="././tout">Tout Voir <img src="{{ asset('images/all.png')}}" alt="" style="height:21px;width:21px;"></a>
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



    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner" style="width:100%; height:500px;">
          <div class="item active">
            <img src="{{ asset('images/banner/thefirstbanner.jpg')}}" alt="">
          </div>
      
          <div class="item">
            <img src="{{ asset('images/banner/thebanner.jpg')}}" alt="">
          </div>
      
          <div class="item">
            <img src="{{ asset('images/banner/thenextbanner.jpg')}}" alt="">
          </div>
        </div>
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

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
      <div class="ps-section--features-product ps-section masonry-root pt-100 pb-100">
        <div class="ps-container">
          <div class="ps-section__header mb-50">
            <h3 class="ps-section__title" data-mask="latest">Les Derniers Offres</h3>
           
          </div>
          <div class="ps-section__content pb-50">
            <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">
              <div class="ps-masonry">
                <div class="grid-sizer"></div>
             
      
                 

              @foreach ($products as $product)
              <div class="grid-item men">
                    <div class="grid-item__content-wrapper">
                      <div class="ps-shoe mb-30">
                        <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="{{ asset('storage/'.$product->image)}}" alt=""><a class="ps-shoe__overlay" href="{{ route('products.show', $product->slug) }}"></a>
                        </div>
                        <div class="ps-shoe__content">
                          <div class="ps-shoe__variants">
                            <div class="normal">
                              <p>{!! $product->description !!}</p>  
                            </div>
                            <p>{{ $product->created_at->format('d/m/y') }}</p>
                          </div>
                          <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">{{ $product->title }}</a>
                            <p class="ps-shoe__categories">{{ $product->subtitle }}</p><span class="ps-shoe__price"> {{ $product->price }} .Dt</span>
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
      <div class="ps-section--offer">
        <div class="ps-column"><a class="ps-offer" href="product-listing.html"><img src="{{ asset('images/banner/180.jpg')}}" alt=""></a></div>
        <div class="ps-column"><a class="ps-offer" href="product-listing.html"><img src="{{ asset('images/banner/157.jpg')}}" alt=""></a></div>
      </div>
    
      <div class="ps-section ps-section--top-sales ps-owl-root pt-80 pb-80">
        <div class="ps-container">
          <div class="ps-section__header mb-50">
            <div class="row">
                  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                    <h3 class="ps-section__title" data-mask="BIDUP">Pour Vous</h3>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <div class="ps-owl-actions"><a class="ps-prev" href="#"><i class="ps-icon-arrow-right"></i>Prev</a><a class="ps-next" href="#">Next<i class="ps-icon-arrow-left"></i></a></div>
                  </div>
            </div>
          </div>
          <div class="ps-section__content">
            <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
          
          
              @foreach ($products as $product)
              <div class="ps-shoes--carousel">
                <div class="ps-shoe mb-30">
                  <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="{{ asset('storage/'.$product->image)}}" alt=""><a class="ps-shoe__overlay" href="{{ route('products.show', $product->slug) }}"></a>
                  </div>
                  <div class="ps-shoe__content">
                    <div class="ps-shoe__variants">
                      <div class="normal">
                        <p>{!! $product->description !!}</p>  
                      </div>
                      <p>{{ $product->created_at->format('d/m/y') }}</p>
                    </div>
                    <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">{{ $product->title }}</a>
                      <p class="ps-shoe__categories">{{ $product->subtitle }}</p><span class="ps-shoe__price"> {{ $product->price }} .Dt</span>
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
      <div class="ps-home-testimonial bg--parallax pb-80" data-background="images/background/parallax.jpg">
        <div class="container">
          <div class="owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">
            <div class="ps-testimonial">
              <div class="ps-testimonial__thumbnail"><img src="{{ asset('images/testimonial/1.jpg')}}" alt=""><i class="fa fa-quote-left"></i></div>
              <header>
                <select class="ps-rating">
                  <option value="1">1</option>
                  <option value="1">2</option>
                  <option value="1">3</option>
                  <option value="1">4</option>
                  <option value="5">5</option>
                </select>
                <p>Logan May - CEO & Founder Invision</p>
              </header>
              <footer>
                <p>“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant. “</p>
              </footer>
            </div>
            <div class="ps-testimonial">
              <div class="ps-testimonial__thumbnail"><img src="{{ asset('images/testimonial/2.jpg')}}" alt=""><i class="fa fa-quote-left"></i></div>
              <header>
                <select class="ps-rating">
                  <option value="1">1</option>
                  <option value="1">2</option>
                  <option value="1">3</option>
                  <option value="1">4</option>
                  <option value="5">5</option>
                </select>
                <p>Logan May - CEO & Founder Invision</p>
              </header>
              <footer>
                <p>“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant. “</p>
              </footer>
            </div>
            <div class="ps-testimonial">
              <div class="ps-testimonial__thumbnail"><img src="{{ asset('images/testimonial/3.jpg')}}" alt=""><i class="fa fa-quote-left"></i></div>
              <header>
                <select class="ps-rating">
                  <option value="1">1</option>
                  <option value="1">2</option>
                  <option value="1">3</option>
                  <option value="1">4</option>
                  <option value="5">5</option>
                </select>
                <p>Logan May - CEO & Founder Invision</p>
              </header>
              <footer>
                <p>“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant. “</p>
              </footer>
            </div>
          </div>
        </div>
      </div>
      @endsection