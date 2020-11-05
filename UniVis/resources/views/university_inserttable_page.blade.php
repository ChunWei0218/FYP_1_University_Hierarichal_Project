@extends('layouts.uniedit')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3>Storing data in Firebase (Database) using php</h3>
                    <hr>
                    <form action="university_code.blade.php" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="caption" class="form-control" placeholder="Enter Caption" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="source" class="form-control" placeholder="Enter Source" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="target" class="form-control" placeholder="Enter Target" required>
                                </div>
                            </div>

                            <div class="col-md-12 mb-2">
                                <hr>
                                <div class="form-group">
                                    <button type="submit" name="save_push_data" class="btn btn-success btn-block">Save Data</button>
                                    <hr>
                                    <a href="university_table_page.blade.php" class="btn btn-danger btn-block">Cancel</a>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection