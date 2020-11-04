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
                        <h3 class="mt-2"><i class="fas fa-envelope"></i> Update Account Information:</h3>
                    </div>
                    <!-- Body -->
                    <div class="file-upload-wrapper">
                        <label>Your Photo</label>
                        <input type="file" id="input-file-now" class="file-upload" />
                    </div>
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
                    <div class="md-form">
                        <i class="fas fa-pencil-alt prefix grey-text"></i>
                        <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
                        <label for="form-text">Your BIO</label>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-dark">Update</button>
                    </div>
                    <!-- Fill in here -->
                    <div class="file-upload-wrapper">
                        <label>Your Photo</label>
                        <input type="file" id="input-file-now" class="file-upload" />
                    </div>
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
                    <div class="md-form">
                        <i class="fas fa-pencil-alt prefix grey-text"></i>
                        <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
                        <label for="form-text">Your BIO</label>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-dark">Update</button>
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