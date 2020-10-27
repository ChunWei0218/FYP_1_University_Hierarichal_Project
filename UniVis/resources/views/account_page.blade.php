@extends('layouts.layout_2')

@section('content')
<!-- Section: Contact v.1 -->
<section class="my-5">

    <!-- Grid row -->
    <div class="row">

        <!-- Grid column -->
        <div class="col-lg-12 mb-lg-0 mb-4">

            <!-- Form with header -->
            <div class="card">
                <div class="card-body">
                    <!-- Header -->
                    <div class="form-header accent-1">
                        <h3 class="mt-2"><i class="fas fa-envelope"></i>Account Information:</h3>
                    </div>
                    <!-- Body -->
                    <div class="md-form">
                        <i class="fas fa-user prefix grey-text"></i>
                        <p id="name" for="form-name">Dennis</p>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <p id="email" for="form-email">blabla@gmail.com</p>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-phone prefix grey-text"></i>
                        <p id="contact_num" for="form-Subject">0123456789</p>
                    </div>
                    <!-- Fill in here -->
                    <h3 class="mt-2"><i class="fas fa-envelope"></i> Update Account Information:</h3>
                    <div class="md-form">
                        <i class="fas fa-user prefix grey-text"></i>
                        <input type="text" id="form-name" class="form-control">
                        <label for="form-name">Your name</label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <input type="text" id="form-email" class="form-control">
                        <label for="form-email">Your email</label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-phone prefix grey-text"></i>
                        <input type="text" id="form-Subject" class="form-control">
                        <label for="form-Subject">Your contact number</label>
                    </div>
                    <div class="text-center">
                        <button href="{{action('AccountController@edit', $row['id'])}}" class="btn btn-dark">Update</button>
                    </div>
                </div>
            </div>
            <!-- Form with header -->

        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->

</section>
@endsection
