<nav class="navbar navbar-expand-sm navbar-dark bg-gray rounded text-dark">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(route('index')); ?>">¡!</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo e(route('index')); ?>" aria-current="page"><span
                            class="visually-hidden">Index</span></a>
                </li>
                <?php if(Route::has('login')): ?>

                    <?php if(auth()->guard()->check()): ?>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><?php echo e(Auth::user()->name); ?></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a>
                                <form action="<?php echo e(route('logout')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                        onclick="event.preventDefault();
                                    this.closest('form').submit();"><?php echo e(__('Log Out')); ?></a>
                                </form>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><?php echo e(__('Options')); ?></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="<?php echo e(route('admin.index')); ?>"><?php echo e(__('Manage')); ?></a>
                                <a class="dropdown-item" target="_blank" href="https://github.com/jebcdev">GitHub</a>
                            </div>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Log in')); ?></a>
                        </li>

                        <?php if(Route::has('register')): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>

                <?php endif; ?>


            </ul>
        </div>
    </div>
</nav>
<?php /**PATH D:\laragon\www\GaleriaImagenes\resources\views/layouts/partials/navbar.blade.php ENDPATH**/ ?>