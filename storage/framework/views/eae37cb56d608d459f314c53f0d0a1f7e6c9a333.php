<?php $__env->startSection('content'); ?>
	<h1 class="text-center">Edit</h1>
	<hr/>
	
	<form action="<?php echo e(route('app.store').'/'.$post->id); ?>" method="post">
			<?php echo e(csrf_field()); ?>

			<?php echo e(method_field('PUT')); ?>

			<div class="form-group">
    			<label for="title"><h5>Title</h5></label>
    			<input type="text" class="form-control" name="title" aria-describedby="textHelp" value="<?php echo e($post->title); ?>">
    			
  			</div>
			<div class="form-group">
		    	<label for="content"><h5>Content</h5></label>
		    	<textarea class="form-control" name="content" rows="3"><?php echo e($post->content); ?></textarea>
		  	</div>
		  	
		  	<button type="submit" class="btn btn-primary">Upade</button>
		  	<a href="<?php echo e(@url('app/manage')); ?>" class="btn btn-danger">Cancel</a>
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>