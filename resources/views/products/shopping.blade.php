<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <link href="{{ asset('images/logo.png')}}" rel="icon">
    <meta name="author" content="Nghia Minh Luong">
    <meta name="keywords" content="Default Description">
    <meta name="description" content="Default keyword">
    <title>Bidup - Shopping</title>
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/ps-icon/style.css')}}">
    <!-- CSS Library-->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/Magnific-Popup/dist/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/revolution/css/settings.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/revolution/css/layers.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/revolution/css/navigation.css')}}">
    <!-- Custom-->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
  <body class="ps-loading">
    <div class="header--sidebar"></div>
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
            <form class="ps-search--header" action="do_action" method="post">
              <input class="form-control" type="text" placeholder="Search Product…">
              <button><i class="ps-icon-search"></i></button>
            </form>
            <div class="ps-cart"><a class="ps-cart__toggle" href="#"><i class="ps-icon-shopping-cart"></i></a>
            </div>
  
        </div>


      </nav>



      <div class="topnav">
            <a  href="././">Acceuil <img src="{{ asset('images/home.png')}}" alt="" style="height:21px;width:21px;"></a>
            <a  href="././tout">Tout Voir <img src="{{ asset('images/all.png')}}" alt="" style="height:21px;width:21px;"></a>
            <a  href="././activite">Activités <img src="{{ asset('images/activity.png')}}" alt="" style="height:21px;width:21px;"></a>
            <a  href="././beaute">Beauté <img src="{{ asset('images/beaute.png')}}" alt="" style="height:21px;width:21px;"></a>
            <a  href="././formation">Formation <img src="{{ asset('images/formation.png')}}" alt="" style="height:21px;width:21px;"></a>
           <a  href="././gastronomie">Gastronomie <img src="{{ asset('images/food.png')}}" alt="" style="height:21px;width:21px;"></a>
           <a href="././hotel">Hotels <img src="{{ asset('images/hotel.png')}}" alt="" style="height:21px;width:21px;"></a>
           <a href="././sport">Sport <img src="{{ asset('images/sport.png')}}" alt="" style="height:21px;width:21px;"></a>
            <a class="active"href="#">Shopping <img src="{{ asset('images/shopping.png')}}" alt="" style="height:21px;width:21px;"></a>
            <a href="././ville">Ma ville <img src="{{ asset('images/map.png')}}" alt="" style="height:21px;width:21px;"></a>
    

      </div>
      


     
    </header>




    </div>
    <main class="ps-main">
      <div class="ps-section--features-product ps-section masonry-root pt-100 pb-100">
        <div class="ps-container">
          <div class="ps-section__header mb-50">
            <h3 class="ps-section__title" data-mask="Shopping">Shopping</h3>
           
          </div>
          <div class="ps-section__content pb-50">
            <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">
              <div class="ps-masonry">
                <div class="grid-sizer"></div>
             
              
                @foreach ($products as $product)
                <div class="grid-item men">
                      <div class="grid-item__content-wrapper">
                        <div class="ps-shoe mb-30">
                          <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="{{ asset('images/shoe/10.jpg')}}" alt=""><a class="ps-shoe__overlay" href="product-detail.html"></a>
                          </div>
                          <div class="ps-shoe__content">
                            <div class="ps-shoe__variants">
                              <div class="normal">
                              <h3 style="padding-left:30%;">00:00:00</h3>  
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
     
      <div class="ps-footer bg--cover" data-background="{{ asset('assets/images/ss-judge-ruling-gavel.jpg')}}" style="margin-top:50px;">
        <div class="ps-footer__content">
          <div class="ps-container">
            <div class="row">
                  
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--info second" style="margin-top: -50px;">
                      <header>
                        <h3 class="ps-widget__title">Contactez Nous</h3>
                      </header>
                      <footer>
                          <div class="ps-home-contact">
  

                              <form action="product-listing.html" method="post">
                                <div class="form-group">
                                  <P>Name<span>*</span></P>  
                                <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                  <P>Email<span>*</span></P>
                                  <input class="form-control" type="email">
                                </div>
                                <div class="form-group">
                                  <P>Your message<span>*</span></P>
                                  <textarea class="form-control" rows="4"></textarea>
                                </div>
                                <div class="form-group text-center">
                                  <button class="ps-btn">Send Message<i class="fa fa-angle-right"></i></button>
                                </div>
                              </form>
                        </div>                      </footer>
                    </aside>
                  </div>
    
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  
    
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link" >
                      <header>
                        <h3 class="ps-widget__title">Aide ? </h3>
                      </header>
                      <footer>
                        <ul class="ps-list--link">
                          <li>
                            <a href="#!">Centre d'aide</a>
                          </li>
                          <li>
                            <a href="#!">FAQ</a>
                          </li>
                          <li>
                            <a href="#!">Mentions Légals</a>
                          </li>
                          <li>
                            <a href="#!">Confidentialité</a>
                          </li>
                          <li>
                              <a href="#!">Conditions générale et particuliéres de ventes</a>
                            </li>
                        </ul>
                      </footer>
                    </aside>
                  </div>
                    
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              
                  
    
    
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link">
                      <header>
                        <h3 class="ps-widget__title">LIENS UTILES</h3>
                      </header>
                      <footer>
                        <ul class="ps-list--line">
                          <li>
                            <a href="#!">Application Mobile </a>
                          </li>
                          <li>
                            <a href="#!">Blog BidUp</a>
                          </li>
                          <li>
                            <a href="#!">Le meilleur job de Tunisie</a>
                          </li>
                          <li>
                              <a href="#!">Avis sur BidUp </a>
                            </li>
                            <li>
                              <a href="#!">Press </a>
                            </li>
                            <li>
                              <a href="#!">Programme d'affiliation </a>
                            </li>
                        </ul>
                      </footer>
                    </aside>
                  </div>
                    
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  
                  
    
    
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link">
                      <header>
                        <h3 class="ps-widget__title">INFORMATIONS</h3>
                      </header>
                      <footer>
                        <ul class="ps-list--line">
                          <li>
                            <a href="#!">Le concept</a>
                          </li>
                          <li>
                            <a href="#!">Devenir partenaire</a>
                          </li>
                          <li>
                            <a href="#!">Notre équipe</a>
                          </li>
                          <li>
                              <a href="#!">Cartes cadeaux</a>
                            </li>
                            <li>
                              <a href="#!">Engagement qualité </a>
                            </li>
                            <li>
                              <a href="#!">Recrutement</a>
                            </li>
                            <li>
                              <a href="#!"> Programme de fidélité </a>
                            </li>
                        </ul>
                      </footer>
                    </aside>
                  </div>
                 
            </div>
          </div>
        </div>
        <div class="ps-footer__copyright">
          <div class="ps-container">
        <div class="row">
          <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
            <h3 style="color: white;"><i class="fa fa-envelope"></i>Inscrivez vous à notre Newsletter</h3>
          </div>
          <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
            <form class="ps-subscribe__form" action="do_action" method="post">
              <input class="form-control" type="text" placeholder="">
              <button>s'inscrire</button>
            </form>
          </div>
          <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
            <p>Recevez notre newsletter et soyez informé immédiatement des dernières nouveautés.</p>
          </div>
    </div>
    </main>
    <!-- JS Library-->
    <script type="text/javascript" src="{{ asset('plugins/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/owl-carousel/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/gmap3.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/imagesloaded.pkgd.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/isotope.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/jquery.matchHeight-min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/slick/slick/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/elevatezoom/jquery.elevatezoom.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"></script><script type="text/javascript" src="{{ asset('')}}plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <!-- Custom scripts-->
    <script type="text/javascript" src="{{ asset('js/main.js')}}"></script>
  </body>
</html>