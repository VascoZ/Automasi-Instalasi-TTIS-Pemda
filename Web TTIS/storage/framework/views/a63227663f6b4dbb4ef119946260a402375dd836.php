<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dashboard">

    <?php $__currentLoopData = $properties->where('property', 'Logo')->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <link rel="icon" href="<?php echo e(asset('storage/' . $property->image)); ?>">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   

    <?php $__currentLoopData = $profils->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <title><?php echo e($profil->name); ?></title>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- font awesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

    
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script nonce="<?php echo e(csp_nonce()); ?>" type="text/javascript" src="/js/trix.js"></script>

    <style>
      trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
      }

      article{
        text-align: justify;
        text-justify: inter-word;
      }
    </style>
    
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<?php echo $__env->make('dashboard.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid">
  <div class="row">

<?php echo $__env->make('dashboard.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <?php echo $__env->yieldContent('container'); ?>


    </main>
  </div>
</div>


      <script nonce="<?php echo e(csp_nonce()); ?>" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script nonce="<?php echo e(csp_nonce()); ?>" src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

      <script nonce="<?php echo e(csp_nonce()); ?>" src="/js/dashboard.js"></script>
  </body>
</html>


<?php /**PATH G:\PHP\template-csirt\resources\views/dashboard/layouts/main.blade.php ENDPATH**/ ?>