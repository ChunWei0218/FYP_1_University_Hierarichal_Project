@extends('layouts.uniedit')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                echo '
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Hey!</strong> ' . $_SESSION['status'] . '
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            ';
                unset($_SESSION['status']);
            }
            ?>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>Database</h4>
                        </div>
                        <div class="col-md-4 text-right">
                            <form action="university_code.blade.php" method="POST">
                                <a class="btn btn-primary ml-3">Add Data</a>
                                <a class="btn btn-danger">Add Relationship</a>
                            </form>
                        </div>
                    </div>
                    <hr>
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                            @foreach($all_data as $data)
                            <tr>
                                <td>{{$data['name']}}</td>
                                <td>{{$data['node_type']}}</td>
                                <td><button class="btn btn-primary">Edit</button><button class="btn btn-danger">Delete</button></td>
                            </tr>
                            @endforeach
                        </thead>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection