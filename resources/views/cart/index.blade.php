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
      
        <div class="ps-cart"><a class="ps-cart__toggle" href="#"><span><i>{{Cart::count()}}</i></span><i class="fa fa-trophy" aria-hidden="true"></i></a>
             
            </div>
            <div class="menu-toggle"><span></span></div>
          </div>
          </div>

      </div>


    </nav>



    <div class="topnav">
          <a  href="{{ route('welcome') }}">Acceuil <img src="{{ asset('images/home.png')}}" alt="" style="height:21px;width:21px;"></a>
          <a  href="{{ route('products.index') }}">Tout Voir <img src="{{ asset('images/all.png')}}" alt="" style="height:21px;width:21px;"></a>
          <a  href="{{ route('products.activite') }}">Activités <img src="{{ asset('images/activity.png')}}" alt="" style="height:21px;width:21px;"></a>
          <a  href="{{ route('products.beaute') }}">Beauté <img src="{{ asset('images/beaute.png')}}" alt="" style="height:21px;width:21px;"></a>
          <a  href="{{ route('products.formation') }}">Formation <img src="{{ asset('images/formation.png')}}" alt="" style="height:21px;width:21px;"></a>
         <a  href="{{ route('products.gastronomie') }}">Gastronomie <img src="{{ asset('images/food.png')}}" alt="" style="height:21px;width:21px;"></a>
         <a href="{{ route('products.hotel') }}">Hotels <img src="{{ asset('images/hotel.png')}}" alt="" style="height:21px;width:21px;"></a>
         <a  href="{{ route('products.sport') }}">Sport <img src="{{ asset('images/sport.png')}}" alt="" style="height:21px;width:21px;"></a>
          <a href="{{ route('products.shopping') }}">Shopping <img src="{{ asset('images/shopping.png')}}" alt="" style="height:21px;width:21px;"></a>
          <a href="{{ route('products.ville') }}">Ma ville <img src="{{ asset('images/map.png')}}" alt="" style="height:21px;width:21px;"></a>
    </div>
  </header>
  </div>


  <main class="ps-main">
    <div class="ps-content pt-80 pb-80">
      <div class="ps-container">

      

 @if (Cart::count() > 0)

        <div class="ps-cart-listing">

          @if (session('success'))
          <div class="alert alert-danger">
              {{ session('success') }}
          </div>
      @endif

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
                      <form action="{{ route('cart.destroy', $product->rowId) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="ps-remove"></a>
                    </form>
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
              <h3>HT:  <span> {{ Cart::subtotal() }} .Dt</span></h3><hr>
            <h3>TAX: 19%  <span>{{Cart::tax()}}  .Dt</span></h3><hr>
              
              <h3>prix total:  <span> {{ Cart::total() }} .Dt</span></h3><a class="ps-btn" href="{{ route('cart.invoice')}}">Process to checkout<i class="ps-icon-next"></i></a>

            </div>
          </div>
        </div>


        @else


      

        <div class="alert alert-dismissible alert-success">
          <img src="{{asset('images/trophy.png')}}" style="width: 100px; height: 100px" >
          <strong>malheureusemment! :( </strong> Vous avez pas des enchers <a href="{{ route('products.index')}}" class="alert-link">chercher des offres</a>.
        </div>

        @endif


      </div>
    </div>
  
  
  </main>

@endsection