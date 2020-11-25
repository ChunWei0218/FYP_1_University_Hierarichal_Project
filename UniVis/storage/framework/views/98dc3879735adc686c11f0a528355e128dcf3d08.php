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
                                <a type="button" class="btn btn-danger" data-toggle="">Add Relationship</a>
                           
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

                    <hr>
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                            <?php $__currentLoopData = $all_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($data['name']); ?></td>
                                <td><?php echo e($data['node_type']); ?></td>
                                <td>
                                    <a data-toggle="modal" data-target="#modal-warning" type="button"  class="btn btn-primary ml-3"  id="edit">Edit</a>                             
                                    <a class="btn btn-danger" id="delete">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!-- Update Modal -->
                            <form action="" method="POST">
                                <div>
                                    <div class="modal" tabindex="-1" role="dialog" id="modal-warning">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form action="" method="post" class="users-update-record-model">
                                                    <?php echo csrf_field(); ?>

                                                <!--    <?php echo method_field('PUT'); ?>-->
                                                    <div id="editData">
                                                        <!-- <div class="modal-header">
                                                            <h5 class="modal-title">Edit Data</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">  
                                                            <input type="text" placeholder="Name" class="form-control" id="name" name="name">
                                                            <input type="text" placeholder="Category" class="form-control" id="node_type" name="node_type">
                                                        </div> -->
                                                    </div>        
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary updateRecord">Save changes</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                </form>
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
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyAJiPNFCPgcyMwJ74kTIvbloDpFjtoNMRw",
    authDomain: "fyp-univis.firebaseapp.com",
    databaseURL: "https://fyp-univis.firebaseio.com",
    projectId: "fyp-univis",
    storageBucket: "fyp-univis.appspot.com",
    messagingSenderId: "1017413433548",
    appId: "1:1017413433548:web:80905c4a434581790aaa69"
  };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig)
    var database = firebase.database();

    var lastIndex = 0;

    // Get Data
    // firebase.database().ref('users/').on('value', function(snapshot) {
    // var value = snapshot.val();
    // var htmls = [];
    // $.each(value, function(index, value){
    //     if(value) {
    //         htmls.push('<tr>\
    //             <td>'+ value.name +'</td>\
    //             <td>'+ value.node_type +'</td>\
    //             <td><a data-toggle="modal" data-target="#update-modal" data-id="'+index+'">Update</a>\
    //             <a data-toggle="modal" data-target="#remove-modal" data-id="'+index+'">Delete</a></td>\
    //         </tr>');
    //     }  	
    //     lastIndex = index;
    // });
    // $('#tbody').html(htmls);
    // $("#submitUser").removeClass('desabled');
    // });


// Add Data
// $('#submitUser').on('click', function(){
// 	var values = $("#addUser").serializeArray();
// 	var first_name = values[0].value;
// 	var last_name = values[1].value;
// 	var userID = lastIndex+1;

//   firebase.database().ref('users/' + userID).set({
//     first_name: first_name,
//     last_name: last_name,
//   });

  // Reassign lastID value
  lastIndex = userID;
	$("#addUser input").val("");
});

// Update Data
var updateID = 0;
$('body').on('click', '#edit', function() {
	updateID = $(this).attr('data-id');
	firebase.database().ref('nodes/' + updateID).on('value', function(snapshot) {
		var values = snapshot.val();
		var updateData = '<div >\
		    <label for="name" >Name</label>\
		    <div >\
		      <input id="name" type=text name=first_name value="'+values.name+'" required autofocus>\
		    </div>\
		  </div>\
		  <div >\
		    <label for="node_type" >Category</label>\
		    <div >\
		      <input id="node_type" type=text name=last_name value="'+values.node_type+'" required autofocus>\
		    </div>\
		  </div>';

		  $('#editData').html(updateData);
	});
});

$('.updateRecord').on('click', function() {
	var values = $(".users-update-record-model").serializeArray();
	var postData = {
	    name : values[0].value,
	    node_type : values[1].value,
	};

	var updates = {};
	updates['/users/' + updateID] = postData;

	firebase.database().ref().update(updates);

	$("#update-modal").modal('hide');
});

// $('.updateUserRecord').on('click', function() {
// 	var values = $(".users-update-record-model").serializeArray();
// 	var postData = {
// 	  name : values[0].value,
// 	  node_type : values[1].value,
// 	};

// 	var updates = {};
// 	updates['/users/' + updateID] = postData;

// 	firebase.database().ref().update(updates);

// 	$("#update-modal").modal('hide');
// });


// Remove Data
$("body").on('click', '.removeData', function() {
	var id = $(this).attr('data-id');
	$('body').find('.users-remove-record-model').append('<input name=id type=hidden value="'+ id +'">');
});

$('.deleteMatchRecord').on('click', function(){
	var values = $(".users-remove-record-model").serializeArray();
	var id = values[0].value;
	firebase.database().ref('users/' + id).remove();
  $('body').find('.users-remove-record-model').find( "input" ).remove();
	$("#remove-modal").modal('hide');
});
$('.remove-data-from-delete-form').click(function() {
	$('body').find('.users-remove-record-model').find( "input" ).remove();
});
   
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.uniedit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH N:\XAMPP\htdocs\UniVis\resources\views/university_table_page.blade.php ENDPATH**/ ?>