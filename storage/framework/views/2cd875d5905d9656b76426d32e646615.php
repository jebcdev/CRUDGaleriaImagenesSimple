<?php $layoutHelper = app('JeroenNoten\LaravelAdminLte\Helpers\LayoutHelper'); ?>
<?php $preloaderHelper = app('JeroenNoten\LaravelAdminLte\Helpers\preloaderHelper'); ?>

<?php if($layoutHelper->isLayoutTopnavEnabled()): ?>
    <?php ( $def_container_class = 'container' ); ?>
<?php else: ?>
    <?php ( $def_container_class = 'container-fluid' ); ?>
<?php endif; ?>


<div class="<?php echo e($layoutHelper->makeContentWrapperClasses()); ?>">

    
    <?php if($preloaderHelper->isPreloaderEnabled('cwrapper')): ?>
        <?php echo $__env->make('adminlte::partials.common.preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    
    <?php if (! empty(trim($__env->yieldContent('content_header')))): ?>
        <div class="content-header">
            <div class="<?php echo e(config('adminlte.classes_content_header') ?: $def_container_class); ?>">
                <?php echo $__env->yieldContent('content_header'); ?>
            </div>
        </div>
    <?php endif; ?>

    
    <div class="content">
        <div class="<?php echo e(config('adminlte.classes_content') ?: $def_container_class); ?>">
            <?php echo $__env->yieldPushContent('content'); ?>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>

</div>
<?php /**PATH D:\laragon\www\GaleriaImagenes\vendor\jeroennoten\laravel-adminlte\src/../resources/views/partials/cwrapper/cwrapper-default.blade.php ENDPATH**/ ?>