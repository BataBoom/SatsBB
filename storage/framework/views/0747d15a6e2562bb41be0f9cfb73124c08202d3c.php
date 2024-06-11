<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Payments</h1>
    </div>
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>Status</th>
            <th>API</th>
            <th>Site</th>
            <th>Wallet Service</th>
            <th>Invoice no#</th>
            <th>User ID</th>
            <th>Username</th>
            <th>Duration</th>
            <th>Amount</th>
            <th>Amount Paid</th>
            <th><a href="<?php echo e(Request::fullUrlWithQuery(['sort_by' => 'created_at', 'order' => request()->get('order') == 'ASC' ? 'DESC' : 'ASC'])); ?>">Invoice created</a></th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <?php if($payment->status== 1): ?>
                        <span class="badge badge-success">Paid</span>
                    <?php else: ?>
                        <span class="badge badge-danger">Not Paid</span>
                    <?php endif; ?>
                </td>
                <td>
                    <?php if($payment->api== 1): ?>
                        <span class="badge badge-success">&nbsp;</span>
                    <?php else: ?>
                        <span class="badge badge-danger">&nbsp;</span>
                    <?php endif; ?>
                </td>
                <td>
                    <a href="<?php echo e(url('admin/payments/site/'.$payment->site->id)); ?>"><?php echo e($payment->site->name); ?></a>
                </td>
                <td><?php echo e($payment->wallet_service->name); ?></td>
                <td class="text-left">
                    <a href="<?php echo e(url('admin/payments/'.$payment->hash)); ?>">#<?php echo e($payment->invoice_no); ?></a>
                </td>
                <td>
                    <a href="<?php echo e(url('admin/payments/user-'.$payment->user_id)); ?>"><?php echo e($payment->user_id); ?></a>
                </td>
                <td><?php echo e($payment->username); ?></td>
                <td><?php echo e($payment->duration); ?></td>
                <td class="text-right"><?php echo e($payment->amount); ?> <?php echo e($payment->wallet_service->short_code); ?> ($<?php echo e($payment->amount_original); ?>)</td>
                <td class="text-right"><?php echo e($payment->amount_received); ?> <?php echo e($payment->wallet_service->short_code); ?></td>
                <td><?php echo e($payment->created_at); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($payments->appends(request()->query())->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/merchant/resources/views/admin/payments/index.blade.php ENDPATH**/ ?>