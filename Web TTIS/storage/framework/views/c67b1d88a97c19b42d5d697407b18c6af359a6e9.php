

<?php $__env->startSection('container'); ?>
    <!-- Contact Section -->
    <div class="container" style="margin-top:8rem">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">Hubungi Kami</h1>
  
                <article class="my-3 fs-6">
                    <?php $__currentLoopData = $keys->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                        <?php $__currentLoopData = $footers->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $footer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p>Lokasi <?php echo e($footer->name); ?></p>
                            
                            <?php echo e($footer->address); ?>


                            <div class="col-md-8 map my-3" style="height: 300px">
                                <?php echo $footer->maps; ?>

                            </div>

                            <p><?php echo e($footer->name); ?> dapat dihubungi melalui : </p>
                            <p>Email : <?php echo e($footer->email); ?> (Silahkan gunakan PGP untuk komunikasi e-mail terenkripsi, PGP Key dapat diunduh <a href="<?php echo e('storage/' .  $key->path); ?>">disini</a></p>
                            <p>Telephone : <?php echo e($footer->telephone); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>

            </div>
        </div>
    </div> 
    <!-- End Contact Section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\PHP\template-csirt\resources\views/contact.blade.php ENDPATH**/ ?>