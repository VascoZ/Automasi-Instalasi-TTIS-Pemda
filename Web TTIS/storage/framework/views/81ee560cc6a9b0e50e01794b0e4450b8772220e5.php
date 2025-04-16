

<?php $__env->startSection('container'); ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">File Public Key</h1>
    </div>

    <?php if(session()->has('success')): ?>
      <div class="alert alert-success col-lg-8" role="alert">
        <?php echo e(session('success')); ?>

      </div> 
    <?php endif; ?>

    <div class="table-responsive col-lg-8">
      <a href="/dashboard/keys/create" class="btn btn-primary mb-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Upload">Upload a Public Key</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">File Path</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php $__currentLoopData = $keys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($key->name); ?></td>
                <td><?php echo e($key->path); ?></td>
                <td>
                  <form action="/dashboard/keys/<?php echo e($key->name); ?>" method="post" class="d-inline">
                    <?php echo method_field('delete'); ?>
                    <?php echo csrf_field(); ?>
                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span data-feather="x-circle"></span> DELETE</button>
                  </form>
                </td>
              </tr>    
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\PHP\template-csirt\resources\views/dashboard/keys/index.blade.php ENDPATH**/ ?>