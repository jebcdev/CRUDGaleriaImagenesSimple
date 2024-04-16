<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php echo $__env->yieldContent('title', ''); ?></title>

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bs5.css')); ?>">
    <link rel="icon" href="<?php echo e(asset('assets/img/favicon.ico')); ?>" type="image/x-icon">

    <?php echo $__env->yieldContent('styles'); ?>
</head>

<body>
    <?php echo $__env->make('layouts.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <header>
        <h3 class="text-center rounded m-1"><?php echo $__env->yieldContent('h3', ''); ?></h3>
    </header>
    <main>
        <div class="m-1">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </main>

    <?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="<?php echo e(asset('assets/js/bs5.js')); ?>"></script>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html>
<?php /**PATH D:\laragon\www\GaleriaImagenes\resources\views/layouts/base.blade.php ENDPATH**/ ?>