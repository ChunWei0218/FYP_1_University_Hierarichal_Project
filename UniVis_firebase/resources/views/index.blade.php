@extends('layouts.layout')

@section('content')
<!-- Full Page Intro -->
<div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/93.jpg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
        <!-- Content -->
        <div class="text-center white-text mx-5 wow fadeIn">
            <h1 class="mb-4">
                <strong>University hierarchical network visualization toolkit</strong>
            </h1>

            <p>
                <strong>We provide the all the information you need about employees in Universities including the departments, projects. </strong>
            </p>

            <a href="{{ route('university')}}" class="btn btn-outline-white btn-lg">Search
            </a>
        </div>
        <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

</div>
<!-- Full Page Intro -->

<!--Main layout-->
<div class="container z-depth-1 my-5 pt-5 pb-3 px-5">

    <!-- Section -->
    <section>

        <!-- Modal -->
        <h3 class="font-weight-bold text-center dark-grey-text pb-2">Two Simple Steps</h3>
        <hr class="w-header my-4">
        <p class="lead text-center text-muted pt-2 mb-5">Learn how to use our toolkit with just 2 simple steps.</p>

        <div class="row align-items-center">

            <div class="col-lg-6 mb-4">
                <div class="view z-depth-1-half rounded">
                    <img class="rounded img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(6).jpg">
                </div>
            </div>

            <div class="col-lg-6 mb-4">

                <ol class="step pl-0">
                    <li class="step-element pb-0">
                        <div class="step-number">
                            
                        </div>
                        <div class="step-excerpt">
                            <h6 class="font-weight-bold dark-grey-text mb-3">Click the "Search" button above</h6>
                            <p class="text-muted">This is where you will be bring to the a visualisation graph database.</p>
                        </div>
                    </li>
                    <li class="step-element pb-0">
                        <div class="step-number">
                            
                        </div>
                        <div class="step-excerpt">
                            <h6 class="font-weight-bold dark-grey-text mb-3">Start searching! </h6>
                            <p class="text-muted">Once you're in the page you've been brought to, you will see a search tool. This is where you can find the person that you want to get in contact with using that search bar.</p>
                        </div>
                    </li>
                </ol>

            </div>

        </div>

    </section>
    <!-- Section -->

</div>
<div class="container z-depth-1 my-5 pt-5 pb-3 px-5">
    <div class="text-center mx-5 wow fadeIn">
        <h1 class="mb-4">
            <strong>About US</strong>
        </h1>
        <!-- Section heading -->
        <h3 class="font-weight-bold pb-2 mb-4">We are the "Illogical ones"</h3>
    </div>

    <!--Grid row-->
    <div class="text-center mx-5 wow fadeIn">

        <!--Grid column-->
        <!--Section: Main features & Quick Start-->
        <section>

            <!--Grid row-->
            <div class="text-center row wow fadeIn">

                <!--Grid column-->
                <div class="col-lg-12 ">

                    <!--First row-->
                    <div class="row">
                        <div class="col-1 mr-3">
                            <i class="fas fa-code fa-2x indigo-text"></i>
                        </div>
                        <div class="col-10">
                            <h5 class="feature-title">About Project</h5>
                            <p class="grey-text">In this project, we mainly used Laravel and also neoj4 to operate this website and database.</p>
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
                            <h5 class="feature-title">About the founders</h5>
                            <p class="grey-text">The team "Illogical ones" were founded by 3 students of Swinburne University of Technology Sarawak.</p>
                        </div>
                    </div>
                    <!--/Second row-->

                    <div style="height:30px"></div>

                </div>
                <!--/Grid column-->
            </div>
            <!--/Grid row-->

        </section>
        <!--Section: Content-->
        <section class="team-section text-center dark-grey-text">

            <!-- Grid row-->
            <div class="row text-center text-md-left">

                <!-- Grid column -->
                <div class="col-lg-12 col-md-12 mb-5 d-md-flex justify-content-between">
                    <div class="avatar mb-md-0 mb-4 mx-4">
                        <img src="../img/Bryan%20Hon.jpg" class="rounded z-depth-1">
                    </div>
                    <div class="mx-4">
                        <h4 class="font-weight-bold mb-3">Bryan Hon</h4>
                        <h6 class="font-weight-bold grey-text mb-3">Back-End Deveolper</h6>
                        <p class="grey-text">Currently a final year bachelor's degree student with a major of Software development in Swinburne Univerisity of Technology Sarawak.</p>
                        <!-- Facebook-->
                        <a class="p-2 fa-lg fb-ic">
                            <i class="fab fa-facebook-f"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="p-2 fa-lg tw-ic">
                            <i class="fab fa-twitter"> </i>
                        </a>
                        <!--Dribbble -->
                        <a class="p-2 fa-lg dribbble-ic">
                            <i class="fab fa-instagram"> </i>
                        </a>
                    </div>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-12 col-md-12 mb-5 d-md-flex justify-content-between">
                    <div class="avatar mb-md-0 mb-4 mx-4">
                        <img src="../img/Chun%20Wei.jpeg" class="rounded z-depth-1" width="333px" height="333px">
                    </div>
                    <div class="mx-4">
                        <h4 class="font-weight-bold mb-3">Chun Wei</h4>
                        <h6 class="font-weight-bold grey-text mb-3">Front-end Developer</h6>
                        <p class="grey-text">Currently a final year bachelor's degree student with a major of Software development in Swinburne Univerisity of Technology Sarawak.</p>
                        <!-- Facebook-->
                        <a class="p-2 fa-lg fb-ic">
                            <i class="fab fa-facebook-f"> </i>
                        </a>
                        <!--YouTube -->
                        <a class="p-2 fa-lg yt-ic">
                            <i class="fab fa-youtube"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="p-2 fa-lg ins-ic">
                            <i class="fab fa-instagram"> </i>
                        </a>
                    </div>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->

            <!-- Grid row-->
            <div class="row text-center text-md-left">

                <!-- Grid column -->
                <div class="col-lg-12 col-md-12 mb-5 d-md-flex justify-content-between">
                    <div class="avatar mb-md-0 mb-4 mx-4">
                        <img src="../img/Dennis%20Ng.jpeg" class="rounded z-depth-1" width="333px">
                    </div>
                    <div class="mx-4">
                        <h4 class="font-weight-bold mb-3">Dennis Ng</h4>
                        <h6 class="font-weight-bold grey-text mb-3">Web Developer</h6>
                        <p class="grey-text">Currently a final year bachelor's degree student with a major of Software development in Swinburne Univerisity of Technology Sarawak.</p>
                        <!-- Facebook-->
                        <a class="p-2 fa-lg fb-ic">
                            <i class="fab fa-facebook-f"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="p-2 fa-lg tw-ic">
                            <i class="fab fa-twitter"> </i>
                        </a>
                        <!-- GitHub-->
                        <a class="p-2 fa-lg git-ic">
                            <i class="fab fa-github"> </i>
                        </a>
                    </div>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->

        </section>
        <!--Section: Content-->
        <!--Section: Main features & Quick Start-->
    </div>
</div>

<div class="container z-depth-1 my-5 px-0">

    <!--Section: Content-->
    <section class="my-md-5" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/People/12-col/img%20(97).jpg'); background-size: cover; background-position: center center;">

        <div class="rgba-black-strong rounded p-5">

            <!-- Section heading -->
            <h3 class="text-center font-weight-bold text-white mt-3 mb-5">Contact Us</h3>

            <form class="mx-md-5" action="">

                <div class="row">
                    <div class="col-md-6 mb-4">

                        <div class="card">
                            <div class="card-body px-4">

                                <!-- Name -->
                                <div class="md-form md-outline mt-0">
                                    <input type="text" name="name" id="name" class="form-control">
                                    <label for="name">Your Name</label>
                                </div>
                                <!-- Email -->
                                <div class="md-form md-outline">
                                    <input type="text" name="email" id="email" class="form-control">
                                    <label for="email">Your Email Address</label>
                                </div>
                                <!-- Subject -->
                                <div class="md-form md-outline">
                                    <input type="text" name="subject" id="email" class="form-control">
                                    <label for="subject">Subject</label>
                                </div>
                                <!-- Message -->
                                <div class="md-form md-outline">
                                    <textarea id="message" name="message" class="md-textarea form-control" rows="3"></textarea>
                                    <label for="message">Your Message</label>
                                </div>

                                <button type="submit" name="send" class="btn btn-primary btn-md btn-block ml-0 mb-0">Submit inquiry</button>

                            </div>
                        </div>

                    </div>
                    <div class="col-md-5 offset-md-1 mt-md-4 mb-4 white-text">

                        <h5 class="font-weight-bold">Address</h5>
                        <p class="mb-0">Jalan Simpang Tiga,</p>
                        <p class="mb-0">93350 Kuching, Sarawak</p>
                        <p class="mb-4 pb-2">Malaysia</p>

                        <h5 class="font-weight-bold">Phone</h5>
                        <p class="mb-4 pb-2">+ 60 82 415 353</p>

                        <h5 class="font-weight-bold">Email</h5>
                        <p>study@swinburne.edu.my</p>

                    </div>
                </div>

            </form>

        </div>

    </section>
    <!--Section: Content-->
</div>
<!--Main layout-->
@endsection