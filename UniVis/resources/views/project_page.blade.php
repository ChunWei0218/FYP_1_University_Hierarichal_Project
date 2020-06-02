@extends('layouts.graph_layout')

@section('content')
    <!--content-->
    <!-- Card Wider -->
    <div class="card card-cascade wider text center">

    <!-- Card gragh -->
    <div class="view view-cascade overlay" id="viz">
        <div ></div>
        <div class="mask rgba-white-slight"></div>
    </div>

    <!-- Card content -->
    <div class="card-body card-body-cascade text-center">

        <!-- Title -->
        <h4 class="card-title"><strong>Information about Projects in Universities</strong></h4>
        <!-- Subtitle -->
        <h5 class="blue-text pb-2"><strong>Data Graph</strong></h5>
        <!-- Text -->
        <p class="card-text">This is the Neo4j's data graph</p>

    </div>

    </div>

    <!-- Card Regular -->
    <!--content-->
@endsection