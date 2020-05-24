@extends('layouts.layouts')

@section('content')
    <!-- Full Page Intro -->
    <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/93.jpg'); background-repeat: no-repeat; background-size: cover;">

        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
                <h1 class="mb-4">
                    <strong>TITLE</strong>
                </h1>

                <p>
                    <strong>Welcome</strong>
                </p>

                <a target="_blank" href="#" class="btn btn-outline-white btn-lg">Search
                </a>
            </div>
            <!-- Content -->

        </div>
        <!-- Mask & flexbox options-->

    </div>
    <!-- Full Page Intro -->

    <!--Main layout-->
    <main>
        <div class="container">
            <div class="text-center mx-5 wow fadeIn">
                <h1 class="mb-4">
                <strong>About US</strong>
                </h1>
            </div>

            <!--Grid row-->
            <div class="row text-center">

                <!--Grid column-->
                <!--Section: Main features & Quick Start-->
                <section>

                    <!--Grid row-->
                    <div class="row wow fadeIn">

                        <!--Grid column-->
                        <div class="col-lg-6 col-md-12 px-4">

                            <!--First row-->
                            <div class="row">
                                <div class="col-1 mr-3">
                                    <i class="fas fa-code fa-2x indigo-text"></i>
                                </div>
                                <div class="col-10">
                                    <h5 class="feature-title">Database</h5>
                                    <p class="grey-text">Using neo4j database.</p>
                                </div>
                            </div>
                            <!--/First row-->

                            <div style="height:30px"></div>

                            <!--Second row-->
                            <div class="row">
                                <div class="col-1 mr-3">
                                    <i class="fas fa-book fa-2x blue-text"></i>
                                </div>
                                <div class="col-10">
                                    <h5 class="feature-title">Detailed documentation</h5>
                                    <p class="grey-text">hello.
                                    </p>
                                </div>
                            </div>
                            <!--/Second row-->

                            <div style="height:30px"></div>

                        </div>
                        <!--/Grid column-->
                    </div>
                    <!--/Grid row-->

                </section>
                <!--Section: Main features & Quick Start-->
            </div>
        </div>
    </main>
    <!--Main layout-->
@stop
