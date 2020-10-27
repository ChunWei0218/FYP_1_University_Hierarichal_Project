@extends('layouts.graph_layout')

@section('content')
<!--content-->

<!-- Card Wider -->
<div class="card card-cascade wider text center">

    <!-- Card graph -->
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
    <script src="/js/visualgraph.js"></script>
    <!--content-->
    @endsection