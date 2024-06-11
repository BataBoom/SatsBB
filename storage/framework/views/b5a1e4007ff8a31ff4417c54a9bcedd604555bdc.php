<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row col-lg-12">
                    <span><?php echo e($error); ?></span>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<?php if(Session::has('message')): ?>
    <div class="alert alert-success">
        <div class="row col-lg-12">
            <span><?php echo e(Session::get('message', '')); ?></span>
        </div>
    </div>
<?php endif; ?><?php /**PATH /var/www/merchant/resources/views/admin/layouts/messages.blade.php ENDPATH**/ ?>