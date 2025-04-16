

<?php $__env->startSection('container'); ?>
    <!-- Blog Section -->
    <section id="blog">
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-8 mx-auto text-center">
                    <h1>Latest Post</h1>
                </div>
            </div>
        
        <?php if($posts->count()): ?>
            <div class="container">
                <div class="row">
                    <?php $__currentLoopData = $posts->take(6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-sm-6 my-4">
                            <div class="card-effect" >
                                <div class="position-absolute bg-dark rounded px-3 py-2" style="background-color: rgba(0,0,0,0.7)"><a href="/posts?category=<?php echo e($post->category->slug); ?>" class="text-white text-decoration-none"><?php echo e($post->category->name); ?></a></div>
                          
                                <img src="<?php echo e(asset('storage/' . $post->image)); ?>" alt="<?php echo e($post->category->name); ?>" >

                                <div class="card-body">
                                <h5 class="card-title"><a href="/posts/<?php echo e($post->slug); ?>"><?php echo e($post->title); ?></a></h5>
                                <p>
                                    <small class="text-muted">
                                    By <a href="/posts?author=<?php echo e($post->author->username); ?>" class="text-decoration-none"><?php echo e($post->author->name); ?></a> at <span class="text-dark"><?php echo e(date('F d, Y', strtotime($post->created_at))); ?></span>
                                    </small>
                                </p>
                                <p class="card-text"><?php echo e($post->excerpt); ?></p>
                                <a href="/posts/<?php echo e($post->slug); ?>" class="btn btn-danger">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

        <?php else: ?>
            <p class="text-center fs-4">No Post Found</p>
        <?php endif; ?>
        
        </div>
    </section>
    <!-- End Blog Section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\PHP\template-csirt\resources\views/home.blade.php ENDPATH**/ ?>