<?php

use Carbon\Traits\Timestamp;

$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "univis";
$port = 3306;
$textmsg = "";

// Create connection
$preconn = mysqli_connect('localhost', 'root', '');
mysqli_query($preconn, "CREATE DATABASE `univis`");

$conn = new mysqli('localhost', 'root', '', 'univis', 3306);
mysqli_query($conn, "CREATE TABLE IF NOT EXISTS users(
            `id` bigint(20) UNSIGNED NOT NULL,
            `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
            `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
            `email_verified_at` timestamp NULL DEFAULT NULL,
            `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
            `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;");
$users = mysqli_query($conn, "SELECT * FROM users");


if (mysqli_num_rows($users) == 0) {
    mysqli_query($conn, 'INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
    (8, "admin", "admin123@gmail.com", NULL, "$2y$10$BpnjuFjKPxCtld2Dg5NlAuuUpo5/mFdbN3I5ajOPQPUoYXIHJHAlK", NULL, "2020-11-23 09:17:19", "2020-11-23 09:17:19");');
    mysqli_query($conn, "ALTER TABLE `users` ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);");
    mysqli_query($conn, "ALTER TABLE `users` MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9; COMMIT;");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>UniVis-Visualization Toolkit</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Firebase-->
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-analytics.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="/css/loginregister.css" rel="stylesheet">
</head>

<body class="grey lighten-3">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark black scrolling-navbar">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="<?php echo e(route('index')); ?>">
                <img src="/img/illogical%20ones" width="80px">
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

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="framework/js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="framework/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="framework/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="framework/js/mdb.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://d3js.org/d3.v3.min.js" type="text/javascript"></script>
</body>

</html><?php /**PATH C:\Users\bhsc1\OneDrive\Desktop\UniVis_firebase\resources\views/layouts/layout_2.blade.php ENDPATH**/ ?>