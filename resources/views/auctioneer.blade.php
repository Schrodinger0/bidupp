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
            <a class="active" href="././">Acceuil <img src="{{ asset('images/home.png')}}" alt="" style="height:21px;width:21px;"></a>
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
            <h3 class="ps-section__title" data-mask="Auctioneer">Auctioneer</h3>
           

            <form  action="{{ route('auctioneer.save') }}" method="POST">
              @csrf
                    <fieldset>
                

                        <div class="form-group" style="width: 35%; position: absolute; margin-left: 4%">
                            <fieldset>
                              <label class="control-label" for="readOnlyInput">Name</label>
                              <input class="form-control" id="readOnlyInput" type="text" value="{{ Auth::user()->name }}" readonly="" style="width: 100%">
                            </fieldset>
                          </div>

                          
                        <div class="form-group"  style="width: 35%;margin-left: 60%">
                            <fieldset>
                              <label class="control-label" for="readOnlyInput">email</label>
                              <input class="form-control" id="readOnlyInput" type="text" value="{{ Auth::user()->email }}" readonly="" style="width: 100%">
                            </fieldset>
                          </div>

                      <div class="form-group"  style="width: 35%; position: absolute; margin-left: 4%">
                        <label for="entreprisepos">Position dans l'entreprise</label>
                        <input type="text" class="form-control" required id="entreprisePos" aria-describedby="aucti" placeholder="Commercial ...">
                      </div>
                      
                      <div class="form-group"   style="width: 35%;margin-left: 60%">
                        <label for="entrepriseNom">Nom du l'entreprise</label>
                        <input type="text" class="form-control" required id="entrepriseNom" aria-describedby="aucti" placeholder="Make it Happen ...">
                      </div>

                      <div class="form-group"  style="width: 35%; position: absolute; margin-left: 4%">
                        <label for="linkweb">Lien Site Web</label>
                        <input type="text" class="form-control" required id="linkweb" aria-describedby="aucti" placeholder="exemple.com ...">
                      </div>

                      <div class="form-group"   style="width: 35%;margin-left: 60%">
                        <label for="phone">Numéro du Telephone</label>
                        <input type="text" class="form-control" required id="phone" aria-describedby="aucti" placeholder="+216 00 000 000 ...">
                      </div>

                      <div class="form-group"  style="width: 35%; position: absolute; margin-left: 4%">
                        <label for="adrfis">Adresse Fiscale</label>
                        <input type="text" class="form-control" required id="adrfis" aria-describedby="aucti" placeholder="Adresse Fiscale ...">
                      </div>

                      <div class="form-group"   style="width: 35%;margin-left: 60%">
                        <label for="matfis">Matricule Fiscale</label>
                        <input type="text" class="form-control" required id="matfis" aria-describedby="aucti" placeholder="123456/ Y /Z / T /000...">
                      </div>

                      <div class="form-group">
                        <label for="exampleTextarea">Information Optionelle</label>
                        <textarea class="form-control" id="exampleTextarea" rows="3" ></textarea>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" id="termsChkbx " type="checkbox" value="" checked=""  onchange="isChecked(this, 'sub1')">
                          j'accepte les <a href="https://www.termsandcondiitionssample.com/"> Condition du travail </a>
                        </label>
                      </div>
                      <div class="form-group text-center">
                        <button type="submit" class="ps-btn" id="sub1"  style="width: 20%;"  value="Submit">
                          Envoyer Formulaire
                        </button>  
                      </div>          
                    </fieldset>
                  </form>

                
        </div>
    </div>
  </div>
</div>
</div>

      @endsection
      <script>

function isChecked(checkbox, sub1) {
        document.getElementById(sub1).disabled = !checkbox.checked;
    }

      </script>

   