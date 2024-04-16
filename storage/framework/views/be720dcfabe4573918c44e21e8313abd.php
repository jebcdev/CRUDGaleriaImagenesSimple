

<?php $__env->startSection('title', __($title)); ?>

<?php $__env->startSection('content_header'); ?>
    <h1 class="text-center"><?php echo e(__($title)); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><?php echo e(__('Product Information')); ?></h3>

                </div>
                <div class="card-body">
                    <form action="<?php echo e($route); ?>" method="POST" enctype="multipart/form-data">

                        <?php echo csrf_field(); ?>
                        <?php echo method_field($method); ?>
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <input type="hidden" id="user_id" name="user_id" value="<?php echo e($user_id); ?>">
                        <div class="mb-3">
                            <label for="name" class="form-label"><?php echo e(__('Name')); ?></label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="<?php echo e(old('name', $product->name)); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label"><?php echo e(__('Description')); ?></label>
                            <textarea class="form-control" id="description" name="description"><?php echo e(old('description', $product->description)); ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label"><?php echo e(__('Image')); ?></label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*"
                                <?php echo e($btnText==='Update' ? '' : 'required'); ?> >
                            <?php if($product->image): ?>
                                <div class="mb-3">
                                    <label><?php echo e(__('Current Image')); ?></label><br>
                                    <img class=" img-fluid" src="<?php echo e(asset('storage/' . $product->image)); ?>"
                                        alt="<?php echo e($product->name); ?>" style="max-width: 100px;">
                                </div>
                            <?php endif; ?>

                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label"><?php echo e(__('Price')); ?></label>
                            <input type="number" class="form-control" id="price" name="price" step="100"
                                value="<?php echo e(old('price', $product->price)); ?>" required>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary"><?php echo e(__($btnText)); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\GaleriaImagenes\resources\views/admin/products/form.blade.php ENDPATH**/ ?>