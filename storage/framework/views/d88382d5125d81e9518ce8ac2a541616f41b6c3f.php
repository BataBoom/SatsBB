<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Info</h1>
        <a name="" id="" class="btn btn-primary float-right" href="/admin/user/edit" role="button">Edit</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-sm">
            <thead>
            <tbody>
            <tr>
                <th>Name:</th>
                <td class="text-left"><?php echo e(auth()->user()->name); ?></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td class="text-left"><?php echo e(auth()->user()->email); ?></td>
            </tr>
            <tr>
                <th>Auth. token:</th>
                <td colspan="3" class="text-left"><?php echo e(auth()->user()->auth_token); ?></td>
            </tr>
            </tbody>
        </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/merchant/resources/views/admin/user/info.blade.php ENDPATH**/ ?>