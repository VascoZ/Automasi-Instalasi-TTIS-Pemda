

<?php $__env->startSection('container'); ?>

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3"><?php echo e($service->name); ?></h1>

            <a href="/dashboard/services" class="btn btn-success"><span data-feather="arrow-left"></span> Back</a>
            <a href="/dashboard/services/<?php echo e(($service->slug)); ?>/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/services/<?php echo e(($service->slug)); ?>" method="post" class="d-inline">
                <?php echo method_field('delete'); ?>
                <?php echo csrf_field(); ?>
                <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
            </form>
            
           
            <article class="my-3 fs-6">
                <?php echo $service->content; ?>

            </article>

        </div>
    </div>
</div> 

<?php $__env->stopSection(); ?>


<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\PHP\template-csirt\resources\views/dashboard/services/show.blade.php ENDPATH**/ ?>