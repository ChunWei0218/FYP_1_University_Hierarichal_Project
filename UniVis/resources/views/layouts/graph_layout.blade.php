<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>UniVis-Visualization Toolkit</title>

    <!-- Firebase-->
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-analytics.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="/css/vendor.css" />
    <link rel="stylesheet" href="/css/alchemy.css" />
    <link rel="stylesheet" href="/css/alchemy.min.css" />
    <link href="/css/customapp.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">



</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark black scrolling-navbar">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="{{ route('index')}}">
                <img src="img/illogical%20ones" width="80px">
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('university')}}" >
                            Universities
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('edituniversity')}}">
                            Edit Database
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="">Edit</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('account')}}">My account</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
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
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" src="https://d3js.org/d3.v6.min.js"></script>
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- Alchemy -->
    <script type="text/javascript" src="js/vendor.js"></script>
    <script type="text/javascript" src="js/alchemy.js"></script>
    <script type="text/javascript" src="js/alchemy.min.js"></script>
    <!-- <script type="text/javascript" src="js/alchemyconfig.js"></script> -->
    <script type="text/javascript">
    var config = {
    dataSource: "data/UniVis.json",
    cluster: true,
    clusterColours: ["#DD79FF", "#00FF30", "#5168FF", "#f83f00", "#ff8d8f"],
    forceLocked: false,
    nodeCaptionsOnByDefault: true,
    directedEdges: true,
    initialScale: 0.7,
    initialTranslate: [250, 150],
    nodeTypes: {
        "node_type": [
            "University",
            "Department",
            "Project",
            "Employee",
            "Other"
        ]
    },
    nodeCaption: "name",
    rootNodeRadius: 30,

    showControlDash: true,

    showStats: true,
    nodeStats: true,

    showFilters: true,
    nodeFilters: true,

    captionToggle: true,
    edgesToggle: true,
    nodesToggle: true,
    toggleRootNotes: false,

    zoomControls: true
}


alchemy = new Alchemy(config);
</script>





</body>

</html>