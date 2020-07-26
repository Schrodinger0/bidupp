  <style>#dashya7ajneedsaclass{color:white;}</style>
  <!-- Right Side Of Navbar -->
        <!-- Authentication Links -->
        @guest
            <div class="nav-item-2">
                <a class="nav-item-Button" href="{{ route('login') }}">{{ __('Login') }}</a>
            </div>
            @if (Route::has('register'))
                <div class="nav-item-2">
                    <a class="nav-item-Button2" href="{{ route('register') }}">{{ __('Register') }}</a>
                </div>
            @endif
        @else
                    <div id="switch_auct" ><a href="{{route('Auctioneer')}}" style="display: -webkit-box"> <img src="{{ asset('images/ami.png') }}" style="height: 20px; width:20px; margin-right: 5px;" alt=""><p style="color: black;"> Become An Auctioneer ? </p></a> 
                </div>
<div>    <a href="#" style="display: -webkit-box"> <img src="{{ asset('images/favoris.png') }}" style="height: 20px; width:20px; margin-right: 5px;" alt=""><p style="color: black;"> Wishlist </p></a> 
</div>
    
    
  <div class="nav-item dropdown" style="margin-top:1%;display: flex">
                    <img src="{{ asset('images/user.png') }}" alt="user" style="height: 20px; width:20px; margin-right: 10px;">
                <a style="font-size: 16px;"  id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right"  style="width:fit-content;padding-left: 10px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-37px, 22px, 0px);">
                    <a class="dropdown-item" style="width: 50px; color:black;" href="{{ route('home') }}">
                        <h5>My Profile</h5>
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
            </div>

            <script>
                function authBlade(){
                    var role_user = "{{ Auth::user()->role->name }}"; 
                    if((role_user == "Super Admin")||(role_user == "admin")||(role_user == "Auctionner")){
                      console.log('verified');
                      var dashya7aj = document.createElement('button');
                      var ayacherira = document.createElement('div');
                      var already = document.createElement('div');

                      window.onload = function(){
                         console.log("LOADED");
                         dashya7aj.id = "dashya7ajneedsaclass";
                         dashya7aj.innerHTML = "Access to Dashboard";
                         dashya7aj.onclick = function() { 
                             window.location = "./admin";
                         };
                         ayacherira.id = "dashya7ajneedsaclass";
                         ayacherira.className="alert alert-dismissible alert-danger";
                         ayacherira.innerHTML = "<h5>Sorry You can't Bid using this Account</h5>";
                         if(document.getElementById('samir')!=null)
                         {
                             document.getElementById('samir').replaceWith(dashya7aj);
                         }
                         if(document.getElementById('aya')!=null)
                         {
                             document.getElementById('aya').replaceWith(ayacherira);
                         }
                         already.innerHTML = " ";

                         if(document.getElementById('switch_auct')!=null)
                         {
                             document.getElementById('switch_auct').replaceWith(already);
                         }
                     
                      };
                    }

                   

                }
                authBlade();
                console.log("auth-blade");
        </script>


        @endguest