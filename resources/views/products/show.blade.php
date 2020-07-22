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

       
        <div class="degl" style="position: absolute; margin-left:50%; margin-top:-4%; width:400px;">
          @include('partials.auth')
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

                 @if ($product->images)


                      @foreach (json_decode($product->images, true) as $image)
                        <div class="item"><img src="{{ asset('storage/' . $image) }}" alt=""></div>
                      @endforeach
                @endif
                      </div>
                    </div>
                    <div class="ps-product__image">
                      <div class="item"><img class="zoom" src="{{ asset('storage/'.$product->image)}}" alt="" data-zoom-image="{{ asset('storage/'.$product->image)}}"></div>
                      @if ($product->images)

                    @foreach (json_decode($product->images, true) as $image)
                      <div class="item"><img class="zoom" src="{{ asset('storage/' . $image) }}" alt="" data-zoom-image="{{ asset('storage/' . $image) }}"></div>
                    @endforeach
                     
                    @endif



                    </div>
                  </div>
                  <div class="ps-product__thumbnail--mobile">
                    <div class="ps-product__main-img"><img src="{{ asset('storage/'.$product->image)}}" alt=""></div>
                    <div class="ps-product__preview owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="20" data-owl-nav="true" data-owl-dots="false" data-owl-item="3" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="3" data-owl-item-lg="3" data-owl-duration="1000" data-owl-mousedrag="on"><img src="{{ asset('storage/'.$product->image)}}" alt="">
                      @if ($product->images)
                      @foreach (json_decode($product->images, true) as $image)
                      <img src="{{ asset('storage/' . $image) }}" alt="">
                      @endforeach
                      @endif
                    </div>
                  </div>
                  <div class="ps-product__info">

                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
              
                    <h1>{{ $product->title }}</h1>
                    <p class="ps-product__category">{{ $product->created_at->format('d/m/y') }}</p>
                     
                      

                      @foreach ($cart as $pan)

                      @if($loop->last)
                      <?php

                      $last_bidder = $pan->user_id;

                      ?>
                       <h4 class="ps-product__price" id='lastBidder'>  {{$pan->user_name}}</h4>
                        <h3 class="ps-product__price" id="bidderPrice">{{$pan->amount}} .Dt
                          @endif
                      @endforeach 
                      <del>{{ $product->price }} .DT</del></h3>



                    <p class="ps-product__category"><a href="#">   @foreach ($product->categories as $category)
                      {{ $category->name }}{{ $loop->last ? '' : ', '}}
                  @endforeach</p>

                    <div class="ps-product__block ps-product__quickview">
                      <h2><div id="timer"  class="timer" ></h2>

                    </div>
                    <div class="sondos" id="aya">   

                    <div class="ps-product__block ps-product__size">
                      <h4>DÉFINISSEZ VOTRE OFFRE</h4>
                    
                 
                    </div>
                    <div class="ps-product__shopping">


                      <form action="{{ route('cart.store') }}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                          <input class="form-control" type="number"  name="mont" value="1" style="width: 180px"> 
                          <h3 style="margin-left:200px;margin-top:-40px;">.DT</h3>
                        </div>
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="title" value="{{ $product->title }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                        <input type="hidden" name="slug" value="{{ $product->slug }}">
                        <?php 
                          $p=$product->duration ;
                          $t = date("i");   
                          $c=$product->created_at->format('i');
                          $x=$t-$c;
                        ?>


							<br><br>
						<?php

						$date1 =$product->created_at->format("Y-m-d H:i:s");
						$date2 =date("Y-m-d H:i:s"); 

						$diff =($p*60)-(abs(strtotime($date1) - strtotime($date2))) ;

						$years = floor($diff / (365*60*60*24));
						$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
						$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

						$heures = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24- $days*60*60*24)/ (60*60));
						$minutes = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24- $days*60*60*24-$heures*60*60 )/ (60));
						$secondes=  floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24- $days*60*60*24-$heures*60*60-$minutes*60) );

						$js=($days*24*60)+($heures*60)+($minutes) +($secondes/60) ;

						if ($js>$p){$js=NULL;};

						?>
                        
                        <br><br>
                       <br>

                       <button id="bidb" class="ps-btn mb-10"> <i class="ps-icon-next"></i></button>
                      
                       <div id="winnerMan"></div>
                    </form>
                    </div>

                      <div class="ps-product__actions"><a class="mr-10" href="whishlist.html"><i class="ps-icon-heart"></i></a><a href="compare.html"><i class="ps-icon-share"></i></a></div>
                    </div>




                    <form action="{{ route('thecart.store') }}" method="POST">
                      @csrf

                      <input type="hidden" name="id" value="{{ $product->id }}">
                      <input type="hidden" name="title" value="{{ $product->title }}">
                      <input type="hidden" name="price" value="{{ $product->price }}">
                      <input type="hidden" name="slug" value="{{ $product->slug }}">

                      <div id="sub"> </div>
                    <script>
                      console.log('add to item');
                    </script>

                    
                  </form>



                  </div>
                  <div class="clearfix"></div>
                  <div class="ps-product__content mt-50">
                    <ul class="tab-list" role="tablist">
                      <li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab">Liste des Enchers</a></li>
                      <li><a href="#tab_02" aria-controls="tab_02" role="tab" data-toggle="tab">Description</a></li>
                      
                    </ul>
                  </div>

              
                  <div class="tab-content mb-60">
                    <div class="tab-pane " role="tabpanel" id="tab_02">
                    <p>{!! $product->description !!}</p>
                    </div>
                    <div class="tab-pane active" role="tabpanel" id="tab_01">
                      <table class="table table-sm">
                        <thead>
                          <tr>
                            <th scope="col-1">Heure et date de bid</th>
                            <th scope="col">Nom</th>
                            <th scope="col">valeur</th>
                            
                          </tr>
                        </thead>

                        <tbody id="bidders">
                          @foreach ($cart as $pan)
                          <tr>
                            <th scope="row" class="bg-success col-1">{{$pan->bid_time}}</th>
                            <td>{{$pan->user_name}}</td>
                            <td>{{$pan->amount}} .Dt</td>
                            
                          </tr>
                          @endforeach 
                         
                        </tbody>
                       
                    </table>
             
                  </div>
                </div>
              </div>
            </div>
          </div>
        
         <div class="vanish" style="color: white;"> 
          {{$is_winner = "false"}}

                @if (Auth::check()) 
                    {{$current_session =  Auth::user()->id }}
                @else
                {{$current_session =  00 }}
                @endif
       

          @foreach ($cart as $pan)

                  @if ( $current_session == $last_bidder ) 
                  
                 {{ $is_winner = "true"}}
                 
                  @else

                  {{ $is_winner = "false"}}

               @endif
          @endforeach 
        </div>
          @endsection

          
            <script type="text/javascript">
            function showBlade(){
              var minutes = {{$js }}+0;
              var milliseconds = minutes*60*1000;
              function appendDiv(username){
                var ok = true;
                  if (ok === true) {
                        var div = document.createElement('div');
                        var date = new Date();
                        div.className = 'new-rect';
                        div.innerHTML = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate()+" "+date.getHours()+":"+date.getMinutes()+":"+date.getSeconds()+" "+username;
        
                    document.getElementsByTagName('body')[0].appendChild(div);
                  }
              }
              function time(milliseconds){
                seconds = Math.floor(milliseconds/1000);
                var hou = Math.floor(seconds/3600);
                var min = Math.floor(seconds/60)%60;
                var sec = seconds%60;
                if(Math.floor(hou/10)==0){
                  hou = "0"+hou;
                }
                if(Math.floor(min/10)==0){
                  min = '0'+min;
                }
                if(Math.floor(sec/10)==0){
                  sec = "0"+sec;
                }
                return hou+":"+min+":"+sec;
              }
              var timer;
          
              if(milliseconds>0)
              {
                var timer2 = setInterval(()=>{
                  window.location.reload();
                },10000);
                timer = setInterval(()=>{
                milliseconds -= 1000;
                var bidBtn = document.getElementById('bidb');
                var winnerMan = document.getElementById('winnerMan');
                var timerDiv = document.getElementById('timer');
                timerDiv.innerHTML = time(milliseconds);
                bidBtn.innerHTML = "J'encheris";
                bidBtn.className = 'ps-btn mb-10';
                bidBtn.onclick = function (){
                  appendDiv("username");
                };
                if(milliseconds<=0){
                  console.log('TIMER STOPPED');
                  timerDiv.innerHTML = "00:00:00";
                  var div = document.createElement('div');
                  div.className = "faza-rect";
                  div.innerHTML = "This Auction is done";
                  bidBtn.onclick = null;
                  bidBtn.replaceWith(div);
                  clearInterval(timer);
                  window.location.reload();
                  if({{ $is_winner }} == "true"){
                    var AddToCart = document.createElement('Button');
                    div.className = "faza-rect";
                    div.innerHTML = "win";
                    winnerMan.replaceWith(AddToCart);
                  }
                }
              },1000);}
              else{
                  console.log('milliseconds is null');
                  console.log('TIMER STOPPED');
                  var div = document.createElement('div');
                  div.className = "faza-rect";
                  div.innerHTML = "This Auction is done";
                  document.getElementById('aya').replaceWith(div);
                  var winner = {{$is_winner}};
                  if(winner){
                      var submitDiv = document.getElementById('sub');
                      var submitButton = document.createElement('button');
                      submitButton.type = 'submit';
                      submitButton.className = 'ps-btn mb-10';
                      submitButton.innerHTML = 'Add this item to Cart<i class="ps-icon-next"></i>';
                      submitButton.id = 'addToCartBtn';

                      submitDiv.replaceWith(submitButton);
                    }                
                }
            }
            window.onload = function(){ showBlade();};
            console.log("show-blade");
            console.log("{{$is_winner}}");
            console.log("{{$current_session}}");


          </script>