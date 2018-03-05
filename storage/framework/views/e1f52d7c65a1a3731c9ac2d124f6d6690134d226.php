<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> <?php echo $__env->yieldContent('title'); ?> </title>
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
        <script src="<?php echo e(asset('dist/sweetalert2.min.js')); ?>"></script>
        <link rel="stylesheet" href="<?php echo e(asset('dist/sweetalert2.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('owlcarousel/assets/owl.carousel.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('owlcarousel/assets/owl.theme.default.min.css')); ?>">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        <link href="<?php echo e(asset('css/preview.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/star-rating.css')); ?>" media="all" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/animate.css">

    </head>
    <body>
        <?php echo $__env->make('shared.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="container-fluid">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <?php echo $__env->make('shared.bottomline', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
        <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('owlcarousel/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>

        <script src="<?php echo e(asset('js/star-rating.js')); ?>" type="text/javascript"></script>

        <?php echo $__env->yieldContent('scripts'); ?>
    </body>
</html>