
<?php $__env->startSection('content'); ?>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-10">
			<h1 class="mt-3">Update Data Berita</h1>
			
			<form enctype="multipart/form-data" method="post" action="<?php echo e(route('berita.update', ['beritum' => $berita->id])); ?>">

				<?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>

				<div class="mb-3">
			    <label for="gambar" class="form-label">Masukkan Gambar</label>
			    <input name="gambar" type="file" class="form-control" id="gambar" >
			  </div>
			  
			  <div class="mb-3">
			    <label for="nama" class="form-label">Nama</label>
			    <input value="<?php echo e($berita->nama); ?>" name="nama" type="text" class="form-control" id="nama" >
			  </div>

			  <div class="mb-3">
			    <label for="link" class="form-label">Link</label>
			    <input value="<?php echo e($berita->link); ?>" name="link" type="text" class="form-control" id="link">
			    
			  </div>

			  <button type="submit" class="btn btn-primary">Submit</button>
			  <button onclick="window.href.replace('<?php echo e(route('berita')); ?>')" class="btn">Cancel</button>
			</form>
		</div>
	</div>
</div>
<br>
<br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/web-alumni-rpl-master/resources/views/updateberita.blade.php ENDPATH**/ ?>