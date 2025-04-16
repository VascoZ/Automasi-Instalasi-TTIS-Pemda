
    <!-- Hero Section -->
    <div class="hero vh-100 d-flex justify-content-center align-items-center" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto my-auto text-center">
                    <?php $__currentLoopData = $profils->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <h1 class="display-4 text-white"><?php echo e($profil->name); ?></h1>
                        <article class="text-white my-3 "> <?php echo e(Illuminate\Support\Str::limit(strip_tags($profil->content), 310)); ?> </article>
                        <a href="/profil" class="btn btn-outline-light">Read More</a>
                        <a href="<?php echo e($profil->link); ?>" target="_blank" class="btn btn-outline-light">Lapor Insiden</a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                 
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->


<?php /**PATH G:\PHP\template-csirt\resources\views/layouts/hero.blade.php ENDPATH**/ ?>