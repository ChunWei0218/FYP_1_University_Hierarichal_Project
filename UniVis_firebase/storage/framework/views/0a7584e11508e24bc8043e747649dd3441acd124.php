<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>UniVis-Visualization Toolkit</title>
    <!-- Material Design Bootstrap -->
    <link href="MDB_3.4.1/css/mdb.min.css" rel="stylesheet">
    <!-- bootstrap and custom link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css">
    <link href="/css/uniedit_view.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark black scrolling-navbar">
        <div class="container-fluid navdiv">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo e(route('index')); ?>">
                    <img src="img/illogical%20ones" width="72px">
                </a>
            </div>
            <ul class="navbar-nav ml-auto navbody">
                <li class="nav navbar-nav ">
                    <a class="nav-link" href="<?php echo e(route('university')); ?>">
                        Universities
                    </a>
                </li>
                <li class="nav navbar-nav ">
                    <a class="nav-link" href="<?php echo e(route('feedback')); ?>">
                        Feedback
                    </a>
                </li>
                <li class="nav navbar-nav ">
                    <a class="nav-link" href="<?php echo e(route('faq')); ?>">
                        FAQ
                    </a>
                </li>

                <?php if(auth()->guard()->guest()): ?>
                <li class="nav navbar-nav">
                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                </li>
                <?php if(Route::has('register')): ?>
                <li class="nav navbar-nav">
                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                </li>
                <?php endif; ?>
                <?php else: ?>
                <li class="nav navbar-nav ">
                    <a class="nav-link" href="<?php echo e(route('university_editpage')); ?>">
                        Edit Database
                    </a>
                </li>

                <li class="nav navbar-nav dropdown">
                    <a class="nav-item dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="glyphicon glyphicon-user"></i>
                        <?php echo e(Auth::user()->name); ?>

                        <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                            <div id="logouttext"><?php echo e(__('Logout')); ?></div>
                        </a>

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </li>

                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <!-- Navbar -->

    <?php echo $__env->yieldContent('content'); ?>

    <!-- SCRIPTS -->
    <!-- Bootstrap tooltips -->
    <!-- <script type="text/javascript" src="js/popper.min.js"></script> -->
    <!-- Bootstrap core JavaScript -->
    <!-- <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
    <!-- MDB core JavaScript -->
    <!-- <script type="text/javascript" src="MDB_3.4.1/js/mdb.min.js"></script> -->
    <!-- <script type="text/javascript" src="js/mdb.min.js"></script> -->

    <!-- JQuery -->
    <!-- <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script> -->
    <!-- <script type="text/javascript" src="MDB_3.4.1/js/jquery-3.5.1.min.js"></script> -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.3/js/jquery.tablesorter.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>
    <!-- Firebase -->
    <script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-app.js"></script>
    <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
    <script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-analytics.js"></script>
    <!-- Add Firebase products that you want to use -->
    <script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-database.js"></script>
    <script src="/js/uniedit.js"></script>
    <!-- <script src="/js/jquery.tablesorter.widgets.js"></script> -->
    <script data-main="/js/edit" src="/bower_components/requirejs-bower/require.js"></script>
    <!-- Search bar -->
    <script type="text/javascript">
        $(document).ready(function(){
            $("#SearchData").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#tbody tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
            });
        });
    </script>
</body>

</html><?php /**PATH C:\Users\bhsc1\OneDrive\Desktop\UniVis_firebase\resources\views/layouts/graph_layout.blade.php ENDPATH**/ ?>