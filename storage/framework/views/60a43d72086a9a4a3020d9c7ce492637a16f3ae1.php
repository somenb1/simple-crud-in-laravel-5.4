<?php $__env->startSection('content'); ?>
	<h1 class="text-center">Manage All Posts</h1>
	<hr/><br/><br/>
	<?php if(session('status')): ?>
	    <div class="alert alert-success">
	        <?php echo e(session('status')); ?>

	    </div>
	<?php endif; ?>
	<table class="table table-bordered table-hover">
	  <thead class="thead-default">
	    <tr>
	      <th>#</th>
	      <th>Title</th>
	      <th>Description</th>
	      <th>Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php $i=0; ?>
	  	<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    <tr>
	      <th scope="row"><?php echo e(++$i); ?></th>
	      <td width="200px"><?php echo e($post->title); ?></td>
	      <td><?php echo e($post->content); ?></td>
	      <td >
	      
	      	<p><a href="<?php echo e(@url('app').'/'.$post->id.'/edit'); ?>" class="btn btn-primary">Update</a></p>
	      	<form action="<?php echo e(@url('app').'/'.$post->id); ?>" method="post">
	      		<?php echo e(csrf_field()); ?>

	      		<?php echo e(method_field('DELETE')); ?>

	      		<button class="btn btn-danger">Detete</button>
	      	</form>
	      </td>
	    </tr>
	    
	    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	  </tbody>
	</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>