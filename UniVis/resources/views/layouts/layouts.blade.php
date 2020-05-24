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
    </body>
</html>   