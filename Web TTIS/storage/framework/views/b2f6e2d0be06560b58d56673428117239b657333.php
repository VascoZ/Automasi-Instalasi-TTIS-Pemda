

<?php $__env->startSection('container'); ?>

<div class="container" style="margin-top:120px">
    <h1 class="my-3 text-center"><?php echo e($title); ?></h1>

    <div class="row justify-content-center my-4">
        <div class="col-md-6">
            <form action="/posts">
                <?php if(request('category')): ?>
                    <input type="hidden" name="category" value="<?php echo e(request('category')); ?>">
                <?php endif; ?>
                <?php if(request('author')): ?>
                <input type="hidden" name="author" value="<?php echo e(request('author')); ?>">
                <?php endif; ?>
                
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." name="search" value="<?php echo e(request('search')); ?>">
                    <button class="btn btn-danger" type="submit" >Search</button>
                </div>
            </form>
        </div>
    </div>

    <?php if($posts->count()): ?>
        <div class="card my-4">

            <div class="card">
               <img src="<?php echo e(asset('storage/' . $posts[0]->image)); ?>" alt="<?php echo e($posts[0]->category->name); ?>" class="img-fluid" style="max-height: 400px; object-fit: cover"> 
            </div>
            
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/posts/<?php echo e($posts[0]->slug); ?>" class="text-decoration-none text-dark"><?php echo e($posts[0]->title); ?></a></h3>
                    <p>
                        <small class="text-muted">
                        By <a href="/posts?author=<?php echo e($posts[0]->author->username); ?>" class="text-decoration-none"><?php echo e($posts[0]->author->name); ?></a> in <a href="/posts?category=<?php echo e($posts[0]->category->slug); ?>" class="text-decoration-none"><?php echo e($posts[0]->category->name); ?></a> at <span class="text-dark"><?php echo e(date('F d, Y', strtotime($posts[0]->created_at))); ?></span> 
                        </small>
                    </p>
                <p class="card-text"><?php echo e($posts[0]->excerpt); ?></p>

                <a href="/posts/<?php echo e($posts[0]->slug); ?>" class="text-decoration-none btn btn-danger">Read more</a>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $posts->skip(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 mb-5">
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

    <div class="d-flex justify-content-end">
        <?php echo e($posts->links()); ?>

    </div>
        
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\PHP\template-csirt\resources\views/posts.blade.php ENDPATH**/ ?>