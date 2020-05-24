<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">UniVis</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#Uni">Universities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#Projects">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#FAQ">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#LogIn">Log In</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')

        <footer>
            <div class="col">
                    <h4 class="text-white mb-5">Contacts</h4>
                    <div>
                        <i class="fas fa-phone fa-3x mb-12 text-white"></i>
                        <a>014-6820038 call me maybe</a>
                    </div>
                    <div>
                        <i class="fas fa-envelope fa-3x mb-12 text-white"></i>
                        <a>yada@yada/com</a>
                    </div>
            </div>
        </footer>
        
    <!-- script -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    
    </body>

    
</html>   