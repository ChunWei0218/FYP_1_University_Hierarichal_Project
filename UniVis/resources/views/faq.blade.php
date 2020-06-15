@extends('layouts.layout_2')

@section('content')
    <!-- Grid row -->
    <div class="row">

        <!-- Grid column -->
        <div class="col-lg-12 col-md-12">

            <!--Panel-->
            <div class="card">
                <h3 class="card-header elegant-color-dark lighten-1 white-text text-uppercase font-weight-bold text-center py-5">Frequently Ask Questions</h3>
                <div class="container my-5">
                    <!--Section: Content-->
                    <section>
                        <!-- Section description -->
                        <p class="lead text-muted mx-auto mt-4 pt-2 mb-5 text-center">Got a question? We've got answers. If you have some other questions, go to our <a href="feedback.html">Feedback page</a>.</p>

                        <div class="row text-center text-md-left">
                            <div class="col-md-6 mb-4">
                                <h5 class="font-weight-normal mb-3">What information can we find in this toolkit?</h5>
                                <p class="text-muted">The toolkit that we provide allows you to search for information about the universities and information inside it such as project that they're currently working on, departments, staffs, and supervisors.</p>
                            </div>

                            <div class="col-md-6 mb-4">
                                <h5 class="font-weight-normal mb-3">Why can't I create and account in this site?</h5>
                                <p class="text-muted">The account only can be created in universities that have collaborated with us. This is because having account will gain access to modify the information in the database and that will need verification of users.</p>
                            </div>

                            <div class="col-md-6 mb-4">
                                <h5 class="font-weight-normal mb-3">Is this site provides the lastest information?</h5>
                                <p class="text-muted">Absolutely! The information is updated instantly in this website to keep users updated always.</p>
                            </div>

                            <div class="col-md-6 mb-4">
                                <h5 class="font-weight-normal mb-3">I've realised that my information in this database is wrong but I'm not an admin, what should I do?</h5>
                                <p class="text-muted">If you spot any mistakes on the database we provided, you can go to our <a href="feedback.html">Feedback page</a> and submit your issue and we will fix it as soon as possible.</p>
                            </div>

                            <div class="col-md-6 mb-4">
                                <h5 class="font-weight-normal mb-3">I can't I sign in?</h5>
                                <p class="text-muted">If you're having issue on signing in, you can contact us by calling our number given in the <a href="/framework/index.html">Home page</a>.</p>
                            </div>

                            <div class="col-md-6 mb-4">
                                <h5 class="font-weight-normal mb-3">Do you provide live chat?</h5>
                                <p class="text-muted">Unfortunately, not. But we might implement it in the future. Any question you can call us in <a href="/framework/index.html">Home page</a> or submit your question in <a href="feedback.html">Feedback page</a>. </p>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
            <!--/.Panel-->

        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->
@endsection