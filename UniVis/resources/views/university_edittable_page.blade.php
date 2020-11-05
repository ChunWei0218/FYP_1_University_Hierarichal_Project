@extends('layouts.uniedit')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3>Edit data and Update using php in Firebase (Database)</h3>
                    <hr>
                    <?php
                    include('public/dbconfig.php');
                    $token = $_GET['token'];
                    $ref = "edges/";
                    $getdata = $database->getReference($ref)->getChild($token)->getValue();
                    ?>
                    <form action="university_code.blade.php" method="POST">
                        <div class="row">
                            <input type="hidden" name="ref_token" value="<?php echo $token; ?>">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="caption" class="form-control" value="<?php echo $getdata['caption']; ?>">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="source" class="form-control" value="<?php echo $getdata['source']; ?>">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="target" class="form-control" value="<?php echo $getdata['target']; ?>">
                                </div>
                            </div>

                            <div class="col-md-12 mb-2">
                                <div class="form-group">
                                    <button type="submit" name="update_data" class="btn btn-info btn-block">Update Data</button>
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