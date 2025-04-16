

<?php $__env->startSection('container'); ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create Content of Footer</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/portals" class="mb-5">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="portal" class="form-label">Name</label>
                <select class="form-select" name="portal_id">
                  <?php $__currentLoopData = $portals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(old('portal_id') == $portal->id): ?>
                      <option value="<?php echo e($portal->id); ?>" selected><?php echo e($portal->name); ?></option>
                    <?php else: ?>
                      <option value="<?php echo e($portal->id); ?>"><?php echo e($portal->name); ?></option>
                    <?php endif; ?>  
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            
            <div class="mb-3">
              <label for="content" class="form-label">Content</label>
              <input type="text" class="form-control <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="content" name="content" required value="<?php echo e(old('content')); ?>" >
              <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="invalid-feedback">
                  <?php echo e($message); ?>

              </div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <button type="submit" class="btn btn-primary">Create Categories</button>
        </form>
    </div>



    <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('change', function(){
            fetch('/dashboard/categories/checkSlug?name=' + name.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\PHP\template-csirt\resources\views/dashboard/portals/create.blade.php ENDPATH**/ ?>