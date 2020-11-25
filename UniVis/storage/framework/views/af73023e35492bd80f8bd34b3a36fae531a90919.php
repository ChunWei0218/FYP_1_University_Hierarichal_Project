<?php $__env->startSection('content'); ?>

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
                                <a type="button" class="btn btn-primary ml-3" data-toggle="modal" data-target="#modal-default">Add Data</a>
                                <a type="button" class="btn btn-danger" href="<?php echo e(url('/university_relationshiptable_page')); ?>" >Add Relationship</a>
                           
                        </div>
                    </div>
<!-- Add Data Modal -->
                    <div class="modal" tabindex="-1" role="dialog" id="modal-default">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form action="" method="post">

                                    <div class="modal-header">
                                        <h5 class="modal-title">Add Data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo csrf_field(); ?>

                                        <input type="text" placeholder="Name" class="form-control" id="name" name="name">
                                        <input type="text" placeholder="Category" class="form-control" id="node_type" name="node_type">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="save_change" class="btn btn-primary">Save changes</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
<!-- Table -->
                    <hr>
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                            <tbody id="zeliData">
                           
                        	</tbody>
                            
                            <!-- Update Model -->
                            <form action="" method="POST" class="users-update-record-model form-horizontal">
                                <div id="update-modal" data-backdrop="static" data-keyboard="false" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog" style="width:55%;">
                                        <div class="modal-content" style="overflow: hidden;">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="custom-width-modalLabel">Update Record</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body" id="updateBody">
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success waves-effect waves-light updateUser">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <!-- Delete Model -->
                            <form action="" method="POST" class="users-remove-record-model">
                                <div id="remove-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog" style="width:55%;">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="custom-width-modalLabel">Delete Data</h4>
                                                <button type="button" class="close remove-data-from-delete-form" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <h4>You Want To Delete This Data?</h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light deleteMatchRecord">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </thead>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.uniedit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH N:\XAMPP\htdocs\UniVis2\resources\views/university_table_page.blade.php ENDPATH**/ ?>