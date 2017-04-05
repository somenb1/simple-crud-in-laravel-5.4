;

<?php $__env->startSection('content'); ?>
	
		<h1 class="text-center">Add New Post</h1>
		<hr><br/>

		<?php if(count($errors) > 0): ?>
		    <div class="alert alert-danger">
		        <ul>
		            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                <li><?php echo e($error); ?></li>
		            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		        </ul>
		    </div>
		<?php endif; ?>
		
		<form action="<?php echo e(route('app.store')); ?>" method="post">
			<?php echo e(csrf_field()); ?>

			<div class="form-group">
    			<label for="title"><h5>Title</h5></label>
    			<input type="text" class="form-control" name="title" aria-describedby="textHelp" placeholder="Post's Title">
  			</div>
			<div class="form-group">
		    	<label for="content"><h5>Content</h5></label>
		    	<textarea class="form-control" name="content" rows="3" placeholder="Post's Content"></textarea>
		  	</div>
		  	
		  	<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		<br/> <br/>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>