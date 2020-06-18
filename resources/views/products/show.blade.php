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
        <div class="test">
            <div class="container">
              <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                    </div>
              </div>
            </div>
          </div>
          <div class="ps-product--detail pt-60">
            <div class="ps-container">
              <div class="row">
                <div class="col-lg-10 col-md-12 col-lg-offset-1">
                  <div class="ps-product__thumbnail">
                    <div class="ps-product__preview">
                      <div class="ps-product__variants">
                        <div class="item"><img src="{{ asset('storage/'.$product->image)}}" alt=""></div>
                        <div class="item"><img src="{{ asset('images/shoe-detail/2.jpg')}}" alt=""></div>
                        <div class="item"><img src="{{ asset('images/shoe-detail/3.jpg')}}" alt=""></div>
                        <div class="item"><img src="{{ asset('images/shoe-detail/3.jpg')}}" alt=""></div>
                        <div class="item"><img src="{{ asset('images/shoe-detail/3.jpg')}}" alt=""></div>
                      </div>
                    </div>
                    <div class="ps-product__image">
                      <div class="item"><img class="zoom" src="{{ asset('storage/'.$product->image)}}" alt="" data-zoom-image="{{ asset('storage/'.$product->image)}}"></div>
                      <div class="item"><img class="zoom" src="images/shoe-detail/2.jpg" alt="" data-zoom-image="images/shoe-detail/2.jpg"></div>
                      <div class="item"><img class="zoom" src="{{ asset('images/shoe-detail/3.jpg')}}" alt="" data-zoom-image="{{ asset('images/shoe-detail/3.jpg')}}"></div>
                    </div>
                  </div>
                  <div class="ps-product__thumbnail--mobile">
                    <div class="ps-product__main-img"><img src="{{ asset('storage/'.$product->image)}}" alt=""></div>
                    <div class="ps-product__preview owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="20" data-owl-nav="true" data-owl-dots="false" data-owl-item="3" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="3" data-owl-item-lg="3" data-owl-duration="1000" data-owl-mousedrag="on"><img src="images/shoe-detail/1.jpg" alt=""><img src="images/shoe-detail/2.jpg" alt=""><img src="{{ asset('images/shoe-detail/3.jpg')}}" alt=""></div>
                  </div>
                  <div class="ps-product__info">

                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
              
                    <h1>{{ $product->title }}</h1>
                    <p class="ps-product__category"><a href="#">{{ $product->created_at->format('d/m/y') }}</p>
                    <h3 class="ps-product__price"> BidderPrice .Dt <del>{{ $product->price }} .DT</del></h3>

                    <p class="ps-product__category"><a href="#">   @foreach ($product->categories as $category)
                      {{ $category->name }}{{ $loop->last ? '' : ', '}}
                  @endforeach</p>

                    <div class="ps-product__block ps-product__quickview">
                      <h2>00:00:00:00</h2>
                   
                    </div>
                 
                    <div class="ps-product__block ps-product__size">
                      <h4>DÉFINISSEZ VOTRE OFFRE</h4>
                    
                      <div class="form-group">
                        <input class="form-control" type="number" value="1" style="width: 180px"> 
                        
                      </div>
                      <h3 style="margin-left:200px;margin-top:-40px;">.DT</h3>
                    </div>
                    <div class="ps-product__shopping">


                      <form action="{{ route('cart.store') }}" method="POST">
                        @csrf

                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="title" value="{{ $product->title }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                        <input type="hidden" name="slug" value="{{ $product->slug }}">


                      <button type="submit" class="ps-btn mb-10">J'encheris <i class="ps-icon-next"></i></button>

                      
                    </form>

                      <div class="ps-product__actions"><a class="mr-10" href="whishlist.html"><i class="ps-icon-heart"></i></a><a href="compare.html"><i class="ps-icon-share"></i></a></div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="ps-product__content mt-50">
                    <ul class="tab-list" role="tablist">
                      <li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab">Description</a></li>
                      <li><a href="#tab_02" aria-controls="tab_02" role="tab" data-toggle="tab">Liste des Enchers</a></li>
                      
                    </ul>
                  </div>
                  <div class="tab-content mb-60">
                    <div class="tab-pane active" role="tabpanel" id="tab_01">
                    <p>{!! $product->description !!}</p>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="tab_02">
                      <table class="table table-sm">
                        <thead>
                          <tr>
                            <th scope="col">Heure et date</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">valeur</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">18:00 20/10/2020</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>25 dt</td>
                          </tr>
                          <tr>
                            <th scope="row">18:03 20/10/2020</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>26 dt</td>
                          </tr>
                         
                        </tbody>
                      </table>
             
                  </div>
                </div>
              </div>
            </div>
          </div>
     
          @endsection