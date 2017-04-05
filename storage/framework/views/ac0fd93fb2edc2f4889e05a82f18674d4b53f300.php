<?php $__env->startSection('jumbotron'); ?>
    
    <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Welcome to the Simple <font color="red">CRUD</font>!</h1>
        <p class="lead">This is just a simple CRUD application in Laravel.This application can Create New post | View all post | Update and Delete post.</p>
        
        
      </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!-- Example row of columns -->
    <div class="row">   
      <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-4" style="padding: 4px;">
          <div class="card">
            <div class="card-block">
              <h3 class="card-title"><?php echo e($post->title); ?></h3>
              <p class="card-text"><?php echo e($post->content); ?></p>
              <a href="<?php echo e(@url('app').'/'.$post->id); ?>" class="btn btn-primary">View</a>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>