
<?php $__env->startSection('content'); ?>
<?php if(Auth::check()): ?>
<br>
<br>

<div class="container">
	<div class="row">
		<div class="col-10">
			<h1 class="mt-3">Daftar Berita</h1>
			<?php if(Auth::check()): ?>
			<a href="berita/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i>&nbsp;Tambah Data Berita</a>
			<?php endif; ?>

			<table class="table">
				<thead class="thead-dark">
					<tr>
					<th scope="col">#</th>
					<th scope="col">Nama</th>
					<th scope="col">Link</th>
					<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<th scope="row"><?php echo e($loop->iteration); ?></th>
						<td><?php echo e($brt->nama); ?></td>
						<td> <p class="text-truncate" style="width: 180px;"><?php echo e($brt->link); ?></p></td>
						
						<!-- <td>
								
							<a href="<?php echo e(route('berita.show', ['berita' => $brt->id])); ?>">
								<button class="btn btn-primary"><i class="fa fa-info-circle"></i>&nbsp;Lihat</button></a>
								
						</td> -->
						<td>
								
							<a href="<?php echo e(route('berita.edit', ['beritum' => $brt->id])); ?>">
								<button class="btn btn-info text-white"><i class="fa fa-edit"></i>&nbsp;Update</button></a>
							</td>
								
						<td>
							<form method="post" name="formberita<?php echo e($brt->id); ?>" action="<?php echo e(route('berita.destroy', ['beritum' => $brt->id])); ?>">

							<?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>	
							</form>
							<?php if(Auth::check()): ?>							
								
				
							<button class="btn btn-danger" onclick="myFunction(<?php echo e($brt->id); ?>)"><i class="fa fa-trash">
								</i>&nbsp;Hapus</button>
									<script>
									function myFunction(id) {
									  var txt;
									  var r = confirm("Apakah anda yakin untuk menghapus data berita ini ?");
									  if (r == true) {
									    document.forms['formberita'+id].submit();
									  } else {
									    txt = "You pressed Cancel!";
									  }
									}
									</script>

									<?php endif; ?>
						</td>
						
					
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<br>
<br>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/web-alumni-rpl-master/resources/views/berita.blade.php ENDPATH**/ ?>