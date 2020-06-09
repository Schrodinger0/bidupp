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
          <form class="ps-search--header" action="do_action" method="post">
            <input class="form-control" type="text" placeholder="Search Product…">
            <button><i class="ps-icon-search"></i></button>
          </form>
      
        <div class="ps-cart"><a class="ps-cart__toggle" href="{{ route('cart.index') }}"><span><i>{{Cart::count()}}</i></span><i class="fa fa-trophy" aria-hidden="true"></i></a>
              <div class="ps-cart__listing">
                <div class="ps-cart__content">
                  <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                    <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="images/cart-preview/1.jpg" alt=""></div>
                    <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Amazin’ Glazin’</a>
                      <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                    </div>
                  </div>
                 
                </div>
                <div class="ps-cart__total">
                  <p>Number of items:<span>36</span></p>
                  <p>Item Total:<span>£528.00</span></p>
                </div>
              <div class="ps-cart__footer"><a class="ps-btn" href="{{ route('cart.index') }}">Check out<i class="ps-icon-arrow-left"></i></a></div>
              </div>
            </div>
            <div class="menu-toggle"><span></span></div>
          </div>
          </div>

      </div>


    </nav>



    <div class="topnav">
          <a  href=".././">Acceuil <img src="{{ asset('images/home.png')}}" alt="" style="height:21px;width:21px;"></a>
          <a  href=".././tout">Tout Voir <img src="{{ asset('images/all.png')}}" alt="" style="height:21px;width:21px;"></a>
          <a  href=".././activite">Activités <img src="{{ asset('images/activity.png')}}" alt="" style="height:21px;width:21px;"></a>
          <a  href=".././beaute">Beauté <img src="{{ asset('images/beaute.png')}}" alt="" style="height:21px;width:21px;"></a>
          <a  href=".././formation">Formation <img src="{{ asset('images/formation.png')}}" alt="" style="height:21px;width:21px;"></a>
         <a  href=".././gastronomie">Gastronomie <img src="{{ asset('images/food.png')}}" alt="" style="height:21px;width:21px;"></a>
         <a href=".././hotel">Hotels <img src="{{ asset('images/hotel.png')}}" alt="" style="height:21px;width:21px;"></a>
         <a  href=".././sport">Sport <img src="{{ asset('images/sport.png')}}" alt="" style="height:21px;width:21px;"></a>
          <a href=".././shopping">Shopping <img src="{{ asset('images/shopping.png')}}" alt="" style="height:21px;width:21px;"></a>
          <a href=".././ville">Ma ville <img src="{{ asset('images/map.png')}}" alt="" style="height:21px;width:21px;"></a>
    </div>
  </header>
  </div>


  <main class="ps-main">
    <div class="ps-content pt-80 pb-80">
      <div class="ps-container">
        <div class="ps-cart-listing">
          <table class="table ps-cart__table">
            <thead>
              <tr>
                <th>Tous Produits</th>
                <th>Prix Oreginal</th>
                <th>Prix Enchers</th>
                <th></th>
              </tr>
            </thead>
            <tbody>

                @foreach (Cart::content() as $product)
                    


                <tr>
                    <td><a class="ps-product__preview" href="product-detail.html"><img class="mr-15" src="images/product/cart-preview/1.jpg" alt=""> {{ $product->model->title }} </a></td>
                    <td>{{ $product->model->price }} .Dt</td>
                  
                    <td>Bidder Price .Dt</td>
                    <td>
                      <div class="ps-remove"></div>
                    </td>
                  </tr>

                @endforeach
              
           
            </tbody>
          </table>
          <div class="ps-cart__actions">
            <div class="ps-cart__promotion">
              
              <div class="form-group">
               <a href="{{ route('products.index') }}" class="ps-btn ps-btn--gray">Continue Shopping </a>
              </div>
            </div>
            <div class="ps-cart__total">
              <h3>Total Price: <span> 2599.00 $</span></h3><a class="ps-btn" href="checkout.html">Process to checkout<i class="ps-icon-next"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  
  </main>

@endsection