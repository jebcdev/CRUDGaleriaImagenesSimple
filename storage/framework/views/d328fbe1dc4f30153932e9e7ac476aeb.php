<?php $navbarItemHelper = app('JeroenNoten\LaravelAdminLte\Helpers\NavbarItemHelper'); ?>

<?php if($navbarItemHelper->isSearch($item)): ?>

    
    <?php echo $__env->make('adminlte::partials.navbar.menu-item-search-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php elseif($navbarItemHelper->isNotification($item)): ?>

    
    <?php if (isset($component)) { $__componentOriginal98a67942c2ec9c91515a0436fc67ef1f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal98a67942c2ec9c91515a0436fc67ef1f = $attributes; } ?>
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Layout\NavbarNotification::resolve(['id' => $item['id'],'icon' => $item['icon'],'iconColor' => $item['icon_color'] ?? null,'badgeLabel' => $item['label'] ?? null,'badgeColor' => $item['label_color'] ?? null,'updateCfg' => $item['update_cfg'] ?? null,'enableDropdownMode' => $item['dropdown_mode'] ?? null,'dropdownFooterLabel' => $item['dropdown_flabel'] ?? null] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-navbar-notification'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Layout\NavbarNotification::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item['href'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal98a67942c2ec9c91515a0436fc67ef1f)): ?>
<?php $attributes = $__attributesOriginal98a67942c2ec9c91515a0436fc67ef1f; ?>
<?php unset($__attributesOriginal98a67942c2ec9c91515a0436fc67ef1f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal98a67942c2ec9c91515a0436fc67ef1f)): ?>
<?php $component = $__componentOriginal98a67942c2ec9c91515a0436fc67ef1f; ?>
<?php unset($__componentOriginal98a67942c2ec9c91515a0436fc67ef1f); ?>
<?php endif; ?>

<?php elseif($navbarItemHelper->isFullscreen($item)): ?>

    
    <?php echo $__env->make('adminlte::partials.navbar.menu-item-fullscreen-widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php elseif($navbarItemHelper->isDarkmode($item)): ?>

    
    <?php if (isset($component)) { $__componentOriginalea438dd121312d75fa7ccadbde4a21ec = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalea438dd121312d75fa7ccadbde4a21ec = $attributes; } ?>
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Layout\NavbarDarkmodeWidget::resolve(['iconEnabled' => $item['icon_enabled'] ?? null,'colorEnabled' => $item['color_enabled'] ?? null,'iconDisabled' => $item['icon_disabled'] ?? null,'colorDisabled' => $item['color_disabled'] ?? null] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-navbar-darkmode-widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Layout\NavbarDarkmodeWidget::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalea438dd121312d75fa7ccadbde4a21ec)): ?>
<?php $attributes = $__attributesOriginalea438dd121312d75fa7ccadbde4a21ec; ?>
<?php unset($__attributesOriginalea438dd121312d75fa7ccadbde4a21ec); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalea438dd121312d75fa7ccadbde4a21ec)): ?>
<?php $component = $__componentOriginalea438dd121312d75fa7ccadbde4a21ec; ?>
<?php unset($__componentOriginalea438dd121312d75fa7ccadbde4a21ec); ?>
<?php endif; ?>

<?php elseif($navbarItemHelper->isSubmenu($item)): ?>

    
    <?php echo $__env->make('adminlte::partials.navbar.menu-item-dropdown-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php elseif($navbarItemHelper->isLink($item)): ?>

    
    <?php echo $__env->make('adminlte::partials.navbar.menu-item-link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php endif; ?>
<?php /**PATH D:\laragon\www\GaleriaImagenes\vendor\jeroennoten\laravel-adminlte\src/../resources/views/partials/navbar/menu-item.blade.php ENDPATH**/ ?>