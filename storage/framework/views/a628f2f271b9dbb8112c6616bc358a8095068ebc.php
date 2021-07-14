<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-10">
			<h1 class="mt-3">Tambah Data Mahasiswa</h1>
			
			<form method="post" action="/mahasiswa">
				<?php echo csrf_field(); ?>
			  <div class="mb-3">
			    <label for="nama" class="form-label">Nama</label>
			    <input name="nama" type="text" class="form-control" id="nama" >
			  </div>

			  <div class="mb-3">
			    <label for="nrp" class="form-label">Nrp</label>
			    <input name="nrp" type="text" class="form-control" id="nrp">
			    
			  </div>

			  <div class="mb-3">
			    <label for="email" class="form-label">Email</label>
			    <input name="email" type="email" class="form-control" id="email">
			    
			  </div>

			  <div class="mb-3">
			    <label for="jurusan" class="form-label">Jurusan</label>
			    <input name="jurusan" type="text" class="form-control" id="jurusan">
			   
			  </div>

			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web-alumni-rpl-master\resources\views/create.blade.php ENDPATH**/ ?>