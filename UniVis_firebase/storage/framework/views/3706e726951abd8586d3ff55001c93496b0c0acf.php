<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>UniVis-Visualization Toolkit</title>
    <!-- Material Design Bootstrap -->
    <link href="/css/mdb.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark black scrolling-navbar">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="<?php echo e(route('index')); ?>">
                <img src="img/illogical%20ones" width="80px">
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo e(route('university')); ?>">
                            Universities
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo e(route('feedback')); ?>">
                            Feedback
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo e(route('faq')); ?>">
                            FAQ
                        </a>
                    </li>
                    <?php if(auth()->guard()->guest()): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                    </li>
                    <?php if(Route::has('register')): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                    </li>
                    <?php endif; ?>
                    <?php else: ?>
                    <li class="nav navbar-nav ">
                        <a class="nav-link" href="<?php echo e(route('university_editpage')); ?>">
                            Edit Database
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                            <?php echo e(Auth::user()->name); ?>

                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
                    <?php endif; ?>
                </ul>

            </div>

        </div>
    </nav>
    <!-- Navbar -->

    <?php echo $__env->yieldContent('content'); ?>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="/js/jquery-ui.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <!-- Firebase -->
    <script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-app.js"></script>
    <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
    <script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-analytics.js"></script>
    <!-- Add Firebase products that you want to use -->
    <script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-database.js"></script>

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
    firebase.database().ref('nodes/').on('value', function(snapshot) {
        var value = snapshot.val();
        var htmls = [];
        $.each(value, function(index, value) {
            if (value) {
                htmls.push('<tr>\
                    <td>' + value.label + '</td>\
                    <td>' + value.category +
                    '</td>\
                    <td><a type="button" data-toggle="modal" data-target="#update-modal" class="btn btn-primary ml-3 updateData" data-id="' +
                    index +
                    '">Update</a>\
                    <a type="button" data-toggle="modal" data-target="#remove-modal" class="btn btn-danger removeData" data-id="' +
                    index + '">Delete</a></td>\
                </tr>');
            }
            lastIndex = index;
        });
        $('#tbody').html(htmls);
        // $("#submitUser").removeClass('desabled');
    });

    // Add Data
    //     $('#submitNodes').on('click', function () {
    //     var values = $("#addCustomer").serializeArray();
    //     var name = values[0].value;
    //     var email = values[1].value;
    //     var userID = lastIndex + 1;
    //     console.log(values);
    //     firebase.database().ref('customers/' + userID).set({
    //         name: name,
    //         email: email,
    //     });
    //     // Reassign lastID value
    //     lastIndex = userID;
    //     $("#addCustomer input").val("");
    // });

    var updateID = 0;
    $('body').on('click', '.updateData', function() {
        updateID = $(this).attr('data-id');

        firebase.database().ref('nodes/' + updateID).on('value', function(snapshot) {
            var values = snapshot.val();
            var updateData = '<div class="form-group">\
		        <label for="label" class="col-md-12 col-form-label">Label</label>\
		        <div class="col-md-12">\
		            <input id="label" type="text" class="form-control" name="label" value="' + values.label + '" required autofocus>\
		        </div>\
		    </div>\
		    <div class="form-group">\
		        <label for="category" class="col-md-12 col-form-label">Category</label>\
		        <div class="col-md-12">\
		            <input id="category" type="text" class="form-control" name="category" value="' + values.category + '" required autofocus>\
		        </div>\
		    </div>';
            $('#updateBody').html(updateData);
            $('body').find('.users-update-record-model').append(
                '<input name="id" type="hidden" value="' + updateID + '">');

        });
    });

    $('.updateUserRecord').on('click', function() {
        var values = $(".users-update-record-model").serializeArray();
        var postData = {
            label: values[0].value,
            category: values[1].value,
        };

        var updates = {};
        updates['/nodes/' + updateID] = postData;

        firebase.database().ref().update(updates);
        // $('body').find('.users-update-record-model').find("input").update();

        $("#update-modal").modal('hide');
    });


    // Remove Data
    $("body").on('click', '.removeData', function() {
        var id = $(this).attr('data-id');
        $('body').find('.users-remove-record-model').append('<input name="id" type="hidden" value="' + id +
            '">');
    });

    $('.deleteMatchRecord').on('click', function() {
        var values = $(".users-remove-record-model").serializeArray();
        var id = values[0].value;
        firebase.database().ref('nodes/' + id).remove();
        $('body').find('.users-remove-record-model').find("input").remove();
        $("#remove-modal").modal('hide');
    });
    // $('.remove-data-from-delete-form').click(function() {
    //     $('body').find('.users-remove-record-model').find("input").remove();
    // });
    </script>

</body>

</html><?php /**PATH C:\Users\bhsc1\OneDrive\Desktop\UniVis_firebase\resources\views\layouts\uniedit.blade.php ENDPATH**/ ?>