
<?php $__env->startSection('content'); ?>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-10">
			<h1 class="mt-3">Update Lowongan Pekerjaan</h1>
			
			<form enctype="multipart/form-data" method="post" action="<?php echo e(route('loker.update', ['loker' => $loker->id])); ?>">

				<?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>

				<div class="mb-3">
			    <label for="foto" class="form-label">Masukkan Logo</label>
			    <input name="foto" type="file" class="form-control" id="foto" >
			  </div>
			  
			  <div class="mb-3">
			    <label for="nama" class="form-label">Nama Perusahaan</label>
			    <input value="<?php echo e($loker->nama); ?>" name="nama" type="text" class="form-control" id="nama" >
			  </div>

			  <div class="mb-3">
			    <label for="pekerjaan" class="form-label">Pekerjaan</label>
			    <input value="<?php echo e($loker->pekerjaan); ?>" name="pekerjaan" type="text" class="form-control" id="pekerjaan">
			    
			  </div>

			  <div class="mb-3">
			    <label for="email" class="form-label">Email</label>
			    <input value="<?php echo e($loker->email); ?>" name="email" type="email" class="form-control" id="email">
			    
			  </div>

			  <div class="mb-3">
			    <label for="alamat" class="form-label">Alamat</label>
			    <input value="<?php echo e($loker->alamat); ?>" name="alamat" type="text" class="form-control" id="alamat">
			   
			  </div>

			  <button type="submit" class="btn btn-primary">Submit</button>
			  <button onclick="window.href.replace('<?php echo e(route('loker')); ?>')" class="btn">Cancel</button>
			</form>
		</div>
	</div>
</div>
<br>
<br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/web-alumni-rpl-master/resources/views/updateloker.blade.php ENDPATH**/ ?>