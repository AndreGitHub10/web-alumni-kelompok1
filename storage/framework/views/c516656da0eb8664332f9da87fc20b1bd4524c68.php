<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-10">
			<h1 class="mt-3">Update Data Mahasiswa</h1>

			<form enctype="multipart/form-data" method="post" action="<?php echo e(route('mahasiswa.update', ['mahasiswa' => $mahasiswa->id])); ?>">

				
				<?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
			  <div class="mb-3">
			    <label for="nama" class="form-label">Nama</label>
			    <input value="<?php echo e($mahasiswa->nama); ?>" name="nama" type="text" class="form-control" id="nama" >
			  </div>

			  <div class="mb-3">
			    <label for="nrp" class="form-label">Nrp</label>
			    <input value="<?php echo e($mahasiswa->nrp); ?>" name="nrp" type="text" class="form-control" id="nrp">
			    
			  </div>

			  <div class="mb-3">
			    <label for="email" class="form-label">Email</label>
			    <input value="<?php echo e($mahasiswa->email); ?>" name="email" type="email" class="form-control" id="email">
			    
			  </div>

			  <div class="mb-3">
			    <label for="jurusan" class="form-label">Jurusan</label>
			    <input value="<?php echo e($mahasiswa->jurusan); ?>" name="jurusan" type="text" class="form-control" id="jurusan">
			   
			  </div>

			  <button type="submit" class="btn btn-primary">Submit</button>
			  <button onclick="window.href.replace('<?php echo e(route('mahasiswa.index')); ?>')" class="btn">Cancel</button>
			</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web-alumni-rpl-master\resources\views/update.blade.php ENDPATH**/ ?>