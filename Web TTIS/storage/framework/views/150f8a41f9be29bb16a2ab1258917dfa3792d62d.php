

<?php $__env->startSection('container'); ?>
    <div class="row" style="margin-top:1rem">

        <div class="col-md-10 offset-2">
            <div class="panel panel-default">
                <h2 class="mb-5">Change password</h2>

                <div class="panel-body">
                    <?php if(session('error')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(session('error')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(session('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if($errors): ?>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="alert alert-danger"><?php echo e($error); ?></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <form class="form-horizontal" autocomplete="off" method="POST" action="/register/showChangePasswordGet">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group <?php echo e($errors->has('current-password') ? ' has-error' : ''); ?> mb-3">
                            <label for="current-password" class="col-md-4 form-label">Current Password</label>

                            <div class="col-md-6">
                                <input id="current-password" type="password" class="form-control" name="current-password" required autofocus>

                                <?php if($errors->has('current-password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('current-password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('new-password') ? ' has-error' : ''); ?> mb-3">
                            <label for="new-password" class="col-md-4 form-label">New Password</label>

                            <div class="col-md-6">
                                <input id="new-password" type="password" class="form-control" name="new-password" required aria-describedby="passwordHelpBlock">
                                <div id="passwordHelpBlock" class="form-text">
                                    Minimal 8 Karakter yang berisi kombinasi huruf besar, huruf kecil, angka dan simbol.
                                </div>

                                <?php if($errors->has('new-password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('new-password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="new-password-confirm" class="col-md-4 form-label">Confirm New Password</label>

                            <div class="col-md-6 mb-1">
                                <input id="confirm-password" type="password" class="form-control" name="new-password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="checkPassword">
                            <label class="form-check-label" for="flexCheckDefault">
                              Show Password
                            </label>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Change Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script nonce="<?php echo e(csp_nonce()); ?>" type="text/javascript">
        const y = document.getElementById("checkPassword");
          y.addEventListener("click", myFunction);
        
          function myFunction() {
            const collection = document.getElementsByClassName("form-control");
            for (let i = 0; i < collection.length; i++) {
                if (collection[i].type === "password") {
                  collection[i].type = "text";
                } else {
                  collection[i].type = "password";
                }
            }
          }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\PHP\template-csirt\resources\views/register/change-password.blade.php ENDPATH**/ ?>