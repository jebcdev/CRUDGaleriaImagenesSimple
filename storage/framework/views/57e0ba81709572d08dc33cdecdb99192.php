

<?php $__env->startSection('title'); ?>
    <?php echo e(config('app.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content_header'); ?>
    <h1 class="text-center">
        <?php echo e(__('Products')); ?>

    </h1>
    <div class="text-center mb-3">
        <a href="<?php echo e(route('admin.products.create')); ?>" class="btn btn-primary"><?php echo e(__('Create Product')); ?></a>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <?php if(session('message')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('message')); ?>

                </div>
            <?php endif; ?>

            <div class="table-responsive">
                <table class="table table-bordered table-hover table-stripped" id="table">
                    <thead>
                        <tr>
                            <th><?php echo e(__('Actions')); ?></th>
                            <th>ID</th>
                            <th><?php echo e(__('Creator')); ?></th>
                            <th><?php echo e(__('Name')); ?></th>
                            <th><?php echo e(__('Description')); ?></th>
                            <th><?php echo e(__('Image')); ?></th>
                            <th><?php echo e(__('Price')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td>
                                    <form action="<?php echo e(route('admin.products.destroy', $product)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <div class="container-fluid">
                                            <a class="btn btn-sm btn-primary"
                                                href="<?php echo e(route('admin.products.show', $product)); ?>"><i
                                                    class="fas fa-eye"></i></a>
                                            <a
                                                class="btn btn-sm btn-warning"href="<?php echo e(route('admin.products.edit', $product)); ?>"><i
                                                    class="far fa-edit"></i>
                                            </a>


                                            <button class="btn btn-sm btn-danger" type="submit"
                                                onclick="return confirm('Are you sure?')"><i
                                                    class="fas fa-trash-alt"></i></button>
                                        </div>
                                    </form>
                                </td>
                                <td><?php echo e($product->id); ?></td>
                                <td><?php echo e($product->user->name); ?></td>
                                <td><?php echo e($product->name); ?></td>
                                <td><?php echo e($product->description); ?></td>
                                <td>
                                    <img class="img-fluid" style="width: 50px"
                                        src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>">

                                </td>
                                <td><?php echo e($product->price); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <?php echo e($products->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/datatables.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('assets/js/jq.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatables.min.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\GaleriaImagenes\resources\views/admin/products/index.blade.php ENDPATH**/ ?>