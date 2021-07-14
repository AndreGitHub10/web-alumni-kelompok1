
<?php $__env->startSection('content'); ?>
<br>
<br>
<div class="container">
	<h1 class="mt-3">Lowongan Pekerjaan</h1>
	<?php if(Auth::check()): ?>

	<a href="loker/create" class="btn btn-primary w-100"><i class="fa fa-plus-circle"></i>&nbsp; Tambah Lowongan Pekerjaan</a><br>

	<?php endif; ?>
	<?php $__currentLoopData = $loker; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lkr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<br>
	<div class="card">

		<div class="row g-0">
			<div class="col-md-3">
				<img src="<?php echo e(asset($lkr->foto)); ?>" style="height: 156px; width:100%">
			</div>

			<div class="col-md-9">
				  <h5 class="card-header" ><?php echo e($lkr->pekerjaan); ?></h5>
				  <div class="card-body">
				    <h5 class="card-title"><?php echo e($lkr->nama); ?></h5>
				    <p class="card-text"><?php echo e($lkr->alamat); ?></p>	
					
					<div class="position-relative">
					<div class="position-absolute bottom-0 end-0">
						<form method="post" action="<?php echo e(route('loker.destroy', ['loker' => $lkr->id])); ?>">
						<a href="<?php echo e(route('loker.show', ['loker' => $lkr->id])); ?>" class="btn btn-primary"><i class="fa fa-info-circle"></i>&nbsp;Lihat Detail</a>

						<?php if(Auth::check()): ?>
						<a href="<?php echo e(route('loker.edit', ['loker' => $lkr->id])); ?>" class="btn btn-info text-white"><i class="fa fa-edit"></i>&nbsp;Update</a>
						<?php endif; ?>

						<?php if(Auth::check()): ?>
							<?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
							<button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i>&nbsp;Hapus</button>
						<?php endif; ?>
						</form>
					</div>
					</div>		

		  		</div>
		  		</div>
		</div>
	</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<br>
</div>
<br>
<br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/WPPL/web-alumni-rpl-master/resources/views/loker.blade.php ENDPATH**/ ?>