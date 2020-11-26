

<?php $__env->startSection('content'); ?>

<div class="container ggraph">
    <div id="chart"></div>
</div>
<div class="container gtable">
    <div class="modal-content">
        <div class="modal-body table-responsive">
            <input class="form-control" id="SearchData" type="text" placeholder="Search..">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.graph_lay2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bhsc1\OneDrive\Desktop\UniVis_firebase\resources\views/university_viewpage.blade.php ENDPATH**/ ?>