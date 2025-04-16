

<?php $__env->startSection('container'); ?>

    <div class="container mb-4 d-flex justify-content-center" style="margin-top: 7rem">
        <div class="col-md-8">
            <?php $__currentLoopData = $profils->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h2 class="text-center mt-3">RFC2350 <?php echo e($profil->name); ?></h2>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <br />
            <hr class="mx-auto" style="width: 50%">
            <br />
            <div id="my_pdf" class="mb-4"></div>
        </div>      
    </div>


    <script nonce="<?php echo e(csp_nonce()); ?>" src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.7/pdfobject.min.js" integrity="sha512-g16L6hyoieygYYZrtuzScNFXrrbJo/lj9+1AYsw+0CYYYZ6lx5J3x9Yyzsm+D37/7jMIGh0fDqdvyYkNWbuYuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
    <?php $__currentLoopData = $files->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <script nonce="<?php echo e(csp_nonce()); ?>">PDFObject.embed("<?php echo e(asset('storage/' . $file->path)); ?>", "#my_pdf");</script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
            
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\PHP\template-csirt\resources\views/file.blade.php ENDPATH**/ ?>