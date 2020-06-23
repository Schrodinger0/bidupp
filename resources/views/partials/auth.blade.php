    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="deglaButton" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="deglaButton2" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
        <li style="margin-left: -40%">        <a href="#" > <img src="{{ asset('images/ami.png') }}" style="height: 20px; width:20px; margin-right: 10px;" alt=""> <br> <p style="color: black; margin-left:-30%;"> Parrainer Mes Amis </p></a> 
        </li>
<li>    <a href="#" > <img src="{{ asset('images/favoris.png') }}" style="height: 20px; width:20px; margin-right: 10px;" alt=""> <br> <p style="color: black; margin-left:-30%;"> Mes Favoris </p></a> 
</li>
    
    
  <li class="nav-item dropdown" style="position: absolute; margin-left: 55%; margin-top:1%;">
                    <img src="{{ asset('images/user.png') }}" alt="user" style="height: 20px; width:20px; margin-right: 10px;">
                <a style="font-size: 16px;"  id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="padding-left: 10px;">
                    <a class="dropdown-item" style="width: 50px; color:black;" href="{{ route('home') }}">
                        <h5>Mon Profile</h5>
                        <img src="{{ asset('images/profile.png') }}" alt="profile" style="height: 30px; width:30px; position:absolute; margin-left:100px; margin-top:-25px;">
                    </a>
                        <hr>
                    <a class="dropdown-item" style="width: 50px; color:black;" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     <h5>{{ __('Logout') }}</h5>
                     <img src="{{ asset('images/logout.png') }}" alt="logout" style="height: 20px; width:25px; margin-left:20px;margin-left:100px; margin-top:-25px;">

                 </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>