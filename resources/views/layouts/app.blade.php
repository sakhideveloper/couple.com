<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Marriage Bureau') }}</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/smoothslides.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
</head>
<body id="page-top" class="index four">
 @if ( session('success') )
  <div class="alert alert-{{ session('notice-type') or 'info'}} alert-dismissible" role='alert'>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{ session('success') }}
  </div>
@endif   
 <!-- Navigation -->
    <nav id="header_nav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Couple</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="Main_Menu navbar-example collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right main_nav">
                    <li> <a href="#page-top">Home</a> </li>
                    <li> <a href="#bride_groom_sec">Boys & Girls</a> </li>
                    <li> <a href="#family">Our Family</a> </li>
                    <li> <a href="#photo_gallery">Photo Gallery</a> </li>
                    <li> <a href="#events">Events</a> </li>
                    <li> <a href="#blog">Blog</a> </li>
                    @guest
                    <li> <a href="#rsvp" class="user-login">Login</a> </li>
                    <li> <a href="#rsvp" class="user-signup">Register</a> </li>
                    @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </ul>
            </div><!-- /.navbar-collapse -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div id="preloader">
        <div id="status">
            <div id="bowlG">
                <div id="bowl_ringG">
                    <div class="ball_holderG">
                    <div class="ballG"><div id="heart"></div></div>
                    </div>
                </div>
            </div><!-- #bowlG -->
            <img id="logo_n" src="{{ asset('img/logo.png') }}" width=160 alt="Couple Logo" />
        </div><!-- #status -->
    </div> <!-- #preloader -->
     <!-- Header -->
    <header>
         <div class="container-fluid">
            <div class="row">
                    <section id="video-background-top" class="video_background_sec">
                        <!--Hidden header for w3c validation only-->
                        <h2 class="hidden">Hidden header for w3c validation only</h2>
                        <!--Hidden header for w3c validation only-->
                         <div class="video-bg-self-2"></div> 
                    </section>
                    <div class="countdown-wrap">
                        <div class="countdown"></div>
                    </div>
                <!-- </section>/#main-slider -->
            </div>
        </div>
    </header>
            @yield('content')
       <!--Phone mail addres section-->
    <section class="footer_top_sec footer_top_sec_2">
        <!--Hidden header for w3c validation only-->
        <h2 class="hidden">Hidden header for w3c validation only</h2>
        <!--Hidden header for w3c validation only-->
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                     <p class="phone"><img src="{{ asset('img/phone-icon.png') }} " alt="" />239-842-3433</p>   
                </div>
                <div class="col-md-4">
                     <p class="mail"><img src="{{ asset('img/mail-icon.png') }}" alt="" />name@domain.com</p>  
                </div>
                <div class="col-md-4">
                     <p class="address"><img src="{{ asset('img/location-icon.png') }}" alt="" />Home Address,City Name Country</p>
                </div>
            </div><!-- .row -->
        </div><!-- .container .rsvp_form -->    
    </section>
    
    <!--Go Top -->
    <div id="toTop" class="scrollup two"><a href="#"><i class="fa fa-angle-double-up fa-lg"></i></a></div>
    <!--Phone mail address section End-->
     <footer id="footer" class="footer_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <span id="copyright" class="copyright"><!-- &copy; 2015 Themeonlab.com . All rights reserved. --></span>
                </div>
                <div class="col-md-6 col-xs-12">
                    <ul class="list-inline social_icons wow flash">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div><!-- .col-md-6 col-xs-12 -->
            </div><!-- .row -->
        </div><!-- .container .rsvp_form -->
    </footer>
    <!-- Modal -->
    <div class="modal fade wed" id="myModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                
              </div>
                <div class="modal-body">
                    <div class="modal-img">
                        <img src="img/placehold/zoom.png" alt="" />  
                    </div>
                    <div class="modal-txt">
                         <h4 class="modal-title">Jane doe</h4> 
                         <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est. Sed ut 
    perspiciatis.</p>
                         <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-default cls-wed" data-dismiss="modal">Close</button> -->
                    <p class="social_icons">
                         <a href="#" class=""><i class="fa fa-twitter"></i></a>
                         <a href="#" class=""><i class="fa fa-linkedin"></i></a>
                         <a href="#" class=""><i class="fa fa-facebook"></i></a>
                    </p>
                </div><!-- .modal-footer -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div> <!-- .modal .wed -->
    <div class="modal fade wed" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                </div>
                <div class="modal-body">
                    <div class="modal-img">
                        <img src="img/placehold/zoom.png" alt="" />  
                    </div>
                    <div class="modal-txt">
                         <h4 class="modal-title">Jhon doe</h4> 
                         <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est. Sed ut 
    perspiciatis.</p>
                         <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-default cls-wed" data-dismiss="modal">Close</button> -->
                    <p class="social_icons">
                         <a href="#" class=""><i class="fa fa-twitter"></i></a>
                         <a href="#" class=""><i class="fa fa-linkedin"></i></a>
                         <a href="#" class=""><i class="fa fa-facebook"></i></a>
                    </p>
                </div><!-- .modal-footer -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div> <!-- .modal .wed -->
   <!-- Modal End-->
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{ asset('js/jquery.js') }}"><\/script>')</script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery.singlePageNav.min.js') }}"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{ asset('js/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}" type="text/javascript"></script>
    <!-- PrettyPhoto -->
    <script src="{{ asset('js/jquery.prettyPhoto.js') }}" type="text/javascript" charset="utf-8"></script>
    <!-- Nicescroll JavaScript -->
    <script type="text/javascript" src="{{ asset('js/smoothslides.min.js') }}"></script>
    <script src="{{ asset('js/countdown.js') }}"></script>
    <!-- Video Background JavaScript -->
    <script src="{{ asset('js/jquery.videobackground.js') }}"></script>
    <script src="{{ asset('js/jquery.imageScroll.js') }}"></script>
     <!-- Custom Theme JavaScript -->
    <script src="{{ asset('js/site.js') }}"></script>
</body>
</html>
