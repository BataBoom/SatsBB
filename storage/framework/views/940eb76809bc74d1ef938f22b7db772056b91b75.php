<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Users List</h1>
        <a class="btn btn-primary" href="<?php echo e(url('/admin/managers/edit')); ?>" role="button">
            <div class="extending-button">
                <i class="fas fa-plus"></i>
                <span class="extending-button-body">
                    Add new user
                </span>
            </div>
        </a>
    </div>
    <div class="col-12">
        <table class="table table-bordered table-striped table-sm">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Permissions</th>
                <tH>Actions</tH>
            </tr>

            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td>
                        <?php if($user->admin): ?>
                            <h5><span class="badge badge-danger">Admin</span></h5>
                        <?php else: ?>
                            <h5><span class="badge badge-secondary">Regular</span></h5>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="<?php echo e(url('/admin/managers/edit/'.$user->id)); ?>"
                           role="button"><i class="fas fa-pencil-alt"></i></a>
                        <a class="btn btn-delete-user btn-danger btn-sm" href="<?php echo e(url('/admin/managers/delete/'.$user->id)); ?>"
                           role="button"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/merchant/resources/views/admin/users/index.blade.php ENDPATH**/ ?>