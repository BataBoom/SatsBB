<nav role="main" class="col-md-3 col-lg-2 col-12 d-md-block bg-light">
    <div>
        <div class="col-12 menu-block">
            <h4>Menu</h4>
            <?php echo $__env->make('admin.layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="clearfix"></div>
        <div class="col-12">
            <form method="POST" action="<?php echo e(url('/admin/search')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="search">Search:</label>
                    <input type="text"
                           name="search" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <button type="submit" class="btn btn-primary col-12">Search</button>
            </form>
        </div>
    </div>

</nav><?php /**PATH /var/www/merchant/resources/views/admin/layouts/left_column.blade.php ENDPATH**/ ?>