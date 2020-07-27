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
                <th>All Product</th>
                <th>Oreginal Price</th>
                <th>Winning Price</th>
                <th></th>
              </tr>
            </thead>
            <tbody>

                @foreach (Cart::content() as $product)
                    


                <tr>
                    <td><a class="ps-product__preview" href="#"><img class="mr-15" src="{{ asset('storage/'.$product->model->image)}}" style="height: 150px; width: 150px;" alt=""> {{ $product->model->title }} </a></td>
                    <td>{{ $product->model->price }} .Dt</td>
                  
                    <td> {{ session('Bidderprice') }}  .Dt</td>

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
              <h3>HT:  <span> {{ session('Bidderprice') }} .Dt</span></h3><hr>
              @php
                 $theBidderPrice = session('Bidderprice') ;
                 $taxPrice = ($theBidderPrice * 19) / 100 ;
              @endphp
            <h3>TAX: 19%  <span>{{ $taxPrice}}  .Dt</span></h3><hr>
              @php
                  $totalPriceBid = $taxPrice + $theBidderPrice ;
              @endphp
              <h3>Total Price:  <span> {{ $totalPriceBid}} .Dt</span></h3><a class="ps-btn" href="{{ route('cart.invoice')}}">Proceed to checkout<i class="ps-icon-next"></i></a>

            </div>
          </div>
        </div>


        @else


      

        <div class="alert alert-dismissible alert-success">
          <img src="{{asset('images/trophy.png')}}" style="width: 100px; height: 100px" >
          <strong>unfortunately! :( </strong> You haven't won any Auctions yet!! Hard Luck .. <a href="{{ route('products.index')}}" class="alert-link">Start Winning</a>.
        </div>

        @endif


      </div>
    </div>
  
    
    @if (session('degla'))
    <div class="alert alert-danger">
        {{ session('degla') }}
    </div>
@endif
  
  </main>

@endsection