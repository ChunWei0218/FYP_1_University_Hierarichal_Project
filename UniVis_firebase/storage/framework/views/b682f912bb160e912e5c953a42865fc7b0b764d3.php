<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="">Edit Data</a>
    </div>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</nav>

<h1>Edit <?php echo e($database->label); ?></h1>

<!-- if there are creation errors, they will show here -->
<?php echo e(HTML::ul($errors->all())); ?>


<?php echo e(Form::model($database, array('route' => array('database.update', $database->id), 'method' => 'PUT'))); ?>


<div id="editData">
    <div class="form-group">
        <?php echo e(Form::label('label', 'Label')); ?>

        <?php echo e(Form::text('label', null, array('class' => 'form-control'))); ?>

    </div>

    <div class="form-group">
        <?php echo e(Form::label('category', 'Category')); ?>

        <?php echo e(Form::text('category', null, array('class' => 'form-control'))); ?>

    </div>
</div>

    <?php echo e(Form::submit('Save Changes', array('class' => 'btn btn-primary'))); ?>


<?php echo e(Form::close()); ?>


</div>
</body>
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

// Update Data
var updateID = 0;
$('body').on('click', '.updateData', function() {
	updateID = $(this).attr('data-id');
	firebase.database().ref('users/' + updateID).on('value', function(snapshot) {
		var values = snapshot.val();
		var updateData = '<div >\
		    <label for="label" >Name</label>\
		    <div >\
		      <input id="label" type=text name=label value="'+values.label+'" required autofocus>\
		    </div>\
		  </div>\
		  <div >\
		    <label for="category" >Category</label>\
		    <div >\
		      <input id="category" type=text name=category value="'+values.category+'" required autofocus>\
		    </div>\
		  </div>';

		  $('#editData').html(updateData);
	});
});
</html><?php /**PATH C:\Users\bhsc1\OneDrive\Desktop\UniVis_firebase\resources\views\editData.blade.php ENDPATH**/ ?>