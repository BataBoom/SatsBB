<ul class="nav nav-pills flex-md-column left-navigation">
    <li class="nav-item">
        <a class="nav-link <?php echo e(Helpers::active_link('admin/user')); ?>" href="<?php echo e(url('admin/user/')); ?>">
            <span data-feather="home"><i class="fas fa-user"></i></span>
            Info <span class="sr-only"></span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo e(Helpers::active_link('admin/invoices')); ?>" href="<?php echo e(url('admin/invoices')); ?>">
            <span data-feather="home"><i class="fas fa-file-invoice-dollar"></i></span>
            Invoices <span class="sr-only"></span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo e(Helpers::active_link('admin/payments')); ?>" href="<?php echo e(url('admin/payments')); ?>">
            <span data-feather="home"><i class="fas fa-money-bill-alt"></i></span>
            Payments <span class="sr-only"></span>
        </a>
    </li>
    <?php if(auth()->user()->super || auth()->user()->admin): ?>
        <li class="nav-item">
            <a class="nav-link <?php echo e(Helpers::active_link('admin/managers')); ?>" href="<?php echo e(route('managers.index')); ?>">
                <span data-feather="home"><i class="fas fa-users"></i></span>
                Users <span class="sr-only"></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo e(Helpers::active_link('admin/sites')); ?>" href="<?php echo e(url('admin/sites')); ?>">
                <span data-feather="home"><i class="fas fa-sitemap"></i></span>
                Sites <span class="sr-only"></span>
            </a>
        </li>
    <?php endif; ?>
</ul>
<?php /**PATH /var/www/merchant/resources/views/admin/layouts/nav.blade.php ENDPATH**/ ?>