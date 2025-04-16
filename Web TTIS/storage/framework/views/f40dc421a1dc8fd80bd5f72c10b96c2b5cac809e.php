

<?php $__env->startSection('container'); ?>
    <!-- Service Section -->
    <div class="container" style="margin-top:8rem">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <?php $__currentLoopData = $profils->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h1 class="mb-5">Layanan <?php echo e($profil->name); ?></h1>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
  
                <article class="my-3 fs-6">
                    <?php $__currentLoopData = $services->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $service->content; ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>

            </div>
        </div>
    </div> 
    <!-- End Service Section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\PHP\template-csirt\resources\views/service.blade.php ENDPATH**/ ?>