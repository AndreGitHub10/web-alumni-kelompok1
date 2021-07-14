
<?php $__env->startSection('content'); ?>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-10">
			<h1 class="mt-3">Tambah Data Mahasiswa</h1>
			
			<form method="post" enctype="multipart/form-data" action="<?php echo e(route('mahasiswa')); ?>">
				<?php echo csrf_field(); ?>
			  <div class="mb-3">
			    <label for="gambar" class="form-label">Foto</label>
			    <input name="gambar" type="file" class="form-control" id="gambar" >
			  </div>
			
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
			    <label for="alamat" class="form-label">Alamat</label>
			    <input name="alamat" type="text" class="form-control" id="alamat" >
			  </div>

			  <div class="mb-3">
			    <label for="motivasi" class="form-label">Motivasi</label>
			    <input name="motivasi" type="text" class="form-control" id="motivasi" >
			  </div>

			  <div class="mb-3">
			    <label for="jurusan" class="form-label">Jurusan</label>
			    <input name="jurusan" type="text" class="form-control" id="jurusan">
			  </div>

			  <div class="mb-3">
			    <label for="telepon" class="form-label">Telepon</label>
			    <input name="telepon" type="text" class="form-control" id="telepon" >
			  </div>

			  <div class="mb-3">
			    <label for="pekerjaan" class="form-label">Pekerjaan</label>
			    <input name="pekerjaan" type="text" class="form-control" id="pekerjaan" >
			  </div>

			  <div class="mb-3">
			    <label for="tempatPekerjaan" class="form-label">Tempat Pekerjaan</label>
			    <input name="tempatPekerjaan" type="text" class="form-control" id="tempatPekerjaan" >
			  </div>

			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
<br>
<br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/web-alumni-rpl-master/resources/views/create.blade.php ENDPATH**/ ?>