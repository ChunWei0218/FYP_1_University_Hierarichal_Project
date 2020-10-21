@extends('layouts.graph_layout')

@section('content')
    <!--content-->
    <!-- Card Wider -->
    <div class="card card-cascade wider text center">

    <!-- Card graph -->
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
    <!--content-->
@endsection