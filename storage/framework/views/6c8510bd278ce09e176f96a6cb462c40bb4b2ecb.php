<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard | <?php echo e(env('APP_NAME')); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(secure_asset('css/app.css')); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo e(secure_asset('css/dashboard.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(secure_asset('css/admin.css')); ?>" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous" async></script>



</head>

<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">SatsBB</a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="#">Sign out</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
    <?php echo $__env->make('admin.layouts.left_column', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <?php echo $__env->make('admin.layouts.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</div>
<?php echo $__env->make('admin.layouts.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Bootstrap core JavaScript
================================================== -->


<script src="<?php echo e(secure_asset('js/app.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(secure_asset('js/admin.js')); ?>"></script>
</body>
</html>
<?php /**PATH /var/www/merchant/resources/views/admin/layouts/main.blade.php ENDPATH**/ ?>