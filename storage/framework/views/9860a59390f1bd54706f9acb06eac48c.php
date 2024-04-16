

<?php $__env->startSection('title'); ?>
    <?php echo e(config('app.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content_header'); ?>
    <h1 class="text-center">
        <?php echo e(__('Create')); ?> <?php echo e(__('Products')); ?>

    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.products.form', [
        'title' => 'Create Product',
        'route' => route('admin.products.store'),
        'method' => 'POST',
        'btnText' => 'Create',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\GaleriaImagenes\resources\views/admin/products/create.blade.php ENDPATH**/ ?>