<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>UniVis Toolkit</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="framework/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="framework/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/visualgraph.css" rel="stylesheet">
    <script src="https://rawgit.com/neo4j-contrib/neovis.js/master/dist/neovis.js"></script>
    <link rel="stylesheet" href="https://neo4j-documentation.github.io/developer-resources/language-guides/assets/css/main.css">
    <script src="js/visualgraph.js"></script>
    <script src="src/app.js"></script>
    <script src="src/neo4jApi.js"></script>
</head>



<body onload="draw()">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark black scrolling-navbar">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="framework/index.html">
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
                        <a class="nav-link" href="university.html">
          Universities
        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="feedback.html">
          Feedback
        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="faq.html">
          FAQ
        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i> Profile </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                            <a class="dropdown-item" href="accountpage.html">My account</a>
                            <a class="dropdown-item" href="#">Log out</a>
                        </div>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
    <!-- Navbar -->
    <div role="navigation" class="navbar navbar-default navbar-static-top">

        <div class="col-sm-12">
            <ul class="nav navbar-nav">
                <li>
                    <form role="search" class="navbar-form" id="search">
                        <div class="form-group">
                            <input type="text" value="Bryan" placeholder="Search for Movie Title" class="form-control" name="search">
                        </div>
                        <button class="btn btn-black" type="submit">Search</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Search Results</div>
                <table id="results" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Project</th>
                            <th>Department</th>
                            <th>Universities</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Card gragh -->
    <div class="view view-cascade overlay" id="viz">
    </div>



    <!-- Card Regular -->
    <!--content-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="framework/js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="framework/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="framework/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="framework/js/mdb.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://d3js.org/d3.v3.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="neo4j-web.min.js"></script>
</body>

</body>

</html>