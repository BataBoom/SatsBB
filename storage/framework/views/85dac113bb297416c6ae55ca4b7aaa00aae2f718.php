<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Sites List</h1>
        <a class="btn btn-primary" href="<?php echo e(url('/admin/sites/edit')); ?>" role="button">
            <div class="extending-button">
                <i class="fas fa-plus"></i>
                <span class="extending-button-body">
                    Add new site
                </span>
            </div>
        </a>
    </div>
    <div class="col-12">
        <table class="table table-bordered table-striped table-sm">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Site URL</th>
                <th>Invoices</th>
                <th>Payments</th>
                <th>Payment Services</th>
                <th>Actions</th>
            </tr>

            <?php $__currentLoopData = $sites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $site): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>#<?php echo e($site->id); ?></td>
                    <td><a href="<?php echo e(url('/admin/sites/view/'.$site->id)); ?>"><?php echo e($site->name); ?></a></td>
                    <td><?php echo e($site->site_url); ?></td>
                    <td><a href="<?php echo e(url('admin/invoices/site/'.$site->id)); ?>"><?php echo e($site->invoices_count); ?></a></td>
                    <td><a href="<?php echo e(url('admin/payments/site/'.$site->id)); ?>"><?php echo e($site->paid_invoices_count); ?></a></td>
                    <td>
                        <?php $__currentLoopData = $site->payment_methods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment_method): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($payment_method->active): ?>
                            <span class="coin-icon coin-icon-24 coin-<?php echo e($payment_method->name); ?>"><?php echo e($payment_method->name); ?></span>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                    <td>
                        <a class="btn btn-secondary btn-sm" href="<?php echo e(url('/admin/sites/view/'.$site->id)); ?>"
                           role="button"><i class="fas fa-list-ul"></i></a>
                        <a class="btn btn-primary btn-sm" href="<?php echo e(url('/admin/sites/edit/'.$site->id)); ?>"
                           role="button"><i class="fas fa-pencil-alt"></i></a>
                        <a class="btn btn-delete-site btn-danger btn-sm"
                           href="<?php echo e(url('/admin/sites/delete/'.$site->id)); ?>"
                           role="button"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/merchant/resources/views/admin/sites/index.blade.php ENDPATH**/ ?>