<?php $__env->startSection('content'); ?>
	<h1 class="text-center">View Post</h1>
	<hr/>
	<br/><br/>

	<div class="row">
		<div class="col-md-12">
			<h1><?php echo e($post->title); ?></h1>
			<br/><br/>
		</div>
		<div class="col-md-12">
			<h5><?php echo e($post->content); ?></h5>
			<br/><br/>
		</div>
		
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>