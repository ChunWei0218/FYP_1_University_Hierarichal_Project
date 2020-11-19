<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>UniVis-Visualization Toolkit</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Firebase-->
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-analytics.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="/css/loginregister.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="/css/style.min.css" rel="stylesheet">
    <style type="text/css">
    @media (min-width: 800px) and (max-width: 850px) {
        .navbar:not(.top-nav-collapse) {
            background: #1C2331 !important;
        }
    }
    </style>
</head>

<body class="grey lighten-3">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark black scrolling-navbar">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="{{ route('index')}}">
                <img src="img/illogical%20ones" width="80px">
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('university')}}">
                            Universities
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('feedback')}}">
                            Feedback
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('faq')}}">
                            FAQ
                        </a>
                    </li>
                    @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                @endif
                @else
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('university_editpage')}}">
                        Edit Database
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
                </ul>

            </div>

        </div>
    </nav>
    <!-- Navbar -->

    @yield('content')

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" src="/js/index.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
    // Animations initialization
    new WOW().init();
    </script>
</body>

</html>