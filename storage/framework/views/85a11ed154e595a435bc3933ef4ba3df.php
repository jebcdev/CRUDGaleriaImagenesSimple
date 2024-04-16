

<?php $__env->startSection('title', __('Product Details')); ?>

<?php $__env->startSection('content_header'); ?>
    <h1 class="text-center"><?php echo e(__('Product Details')); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><?php echo e($product->name); ?></h3>
                    <div class="card-tools">
                        <a href="<?php echo e(route('admin.products.edit', $product)); ?>" class="btn btn-sm btn-warning"><i
                                class="far fa-edit"></i> <?php echo e(__('Edit')); ?></a>
                        <form action="<?php echo e(route('admin.products.destroy', $product)); ?>" method="POST" class="d-inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i>
                                <?php echo e(__('Delete')); ?></button>
                        </form>
                        <a href="<?php echo e(route('admin.products.index')); ?>" class="btn btn-sm btn-primary"><i
                                class="fas fa-arrow-left"></i> <?php echo e(__('Back')); ?></a>
                    </div>
                </div>
                <div class="card-body">
                    <p><strong><?php echo e(__('ID')); ?>:</strong> <?php echo e($product->id); ?></p>
                    <p><strong><?php echo e(__('Creator')); ?>:</strong> <?php echo e($product->user->name); ?></p>
                    <p><strong><?php echo e(__('Description')); ?>:</strong> <?php echo e($product->description); ?></p>
                    <p><strong><?php echo e(__('Price')); ?>:</strong> <?php echo e($product->price); ?></p>
                    <p><strong><?php echo e(__('Image')); ?>:</strong></p>
                    <img class="img-fluid" src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>">
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\GaleriaImagenes\resources\views/admin/products/show.blade.php ENDPATH**/ ?>