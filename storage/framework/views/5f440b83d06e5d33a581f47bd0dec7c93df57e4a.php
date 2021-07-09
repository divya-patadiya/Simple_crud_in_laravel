<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title><?php echo e(config('app.name')); ?></title>

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

      <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
  </head>

  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="<?php echo e(route('post.index')); ?>"><?php echo e(config('app.name')); ?></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="<?php echo e(route('post.index')); ?>">Home <span class="sr-only">(current)</span></a>
                  </li>
              </ul>

              <a href="<?php echo e(route('post.create')); ?>" class="btn btn-success my-2 my-sm-0">Create Post</a>
          </div>
      </nav>
      <div class="container py-3">
          <div class="row">
              <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-4">
                  <div class="card">
                      <div class="card-header">
                          <h3><?php echo e($post->title); ?></h3>
                      </div>
                      <div class="card-body">
                          <p><?php echo e(substr($post->description, 0, 100)); ?></p>
                          <a href="<?php echo e(route('post.show', $post->id)); ?>" class="btn btn-primary btn-block">Read More</a>
                      </div>
                  </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
      </div>
  </body>

</html><?php /**PATH D:\laravelapp\Practice1\resources\views/post/create.blade.php ENDPATH**/ ?>