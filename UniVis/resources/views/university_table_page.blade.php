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
                            <h4>Contact Details - Retrieve/Get/Fetch Data from Firebase (Datbase) in PHP</h4>
                        </div>
                        <div class="col-md-4 text-right">
                            <?php
                            include('dbconfig.php');

                            $ref = "edges";
                            $totaldata = $database->getReference($ref)->getSnapshot()->numChildren();
                            ?>
                            <h5 class="bg-primary px-3 text-center py-2 text-white">Total Record Inserted: <?php echo $totaldata ?></h5>
                            <form action="university_code.blade.php" method="POST">
                                <button type="submit" name="reset_data" class="btn btn-danger">Clear Data</button>
                                <a href="university_inserttable_page.blade.php" class="btn btn-primary ml-3">Add</a>
                            </form>
                        </div>
                    </div>
                    <hr>
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>id</th>
                                <th>Caption</th>
                                <th>Source</th>
                                <th>Target</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <?php
                            include('dbconfig.php');

                            $ref = "edges";
                            $getdata = $database->getReference($ref)->getValue();
                            $i = 0;
                            if ($getdata > 0) {
                                foreach ($getdata as $key => $row) {
                                    $i++;
                            ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row['caption']; ?></td>
                                        <td><?php echo $row['source']; ?></td>
                                        <td><?php echo $row['target']; ?></td>
                                        <td>
                                            <a href="university_edittable_page.blade.php?token=<?php echo $key; ?>" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="university_code.blade.php" method="POST">
                                                <input type="hidden" name="ref_token_delete" value="<?php echo $key; ?>">
                                                <button type="submit" name="delete_data" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                }
                            } else {
                                ?>
                                <tr class="text-center">
                                    <td colspan="6">DATA NOT THERE IN DATABASE</td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection