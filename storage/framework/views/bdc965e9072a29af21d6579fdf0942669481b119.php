<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-10">
			<h1 class="mt-3">Daftar Mahasiswa</h1>
			<a href="/mahasiswa/create" class="btn btn-primary">Tambah Data Mahasiswa</a>

			<table class="table">
				<thead class="thead-dark">
					<tr>
					<th scope="col">#</th>
					<th scope="col">Nama</th>
					<th scope="col">NRP</th>
					<th scope="col">Email</th>
					<th scope="col">Jurusan</th>
					<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<th scope="row"><?php echo e($loop->iteration); ?></th>
						<td><?php echo e($mhs->nama); ?></td>
						<td><?php echo e($mhs->nrp); ?></td>
						<td><?php echo e($mhs->email); ?></td>
						<td><?php echo e($mhs->jurusan); ?></td>
						<td>
							<a href="<?php echo e(route('mahasiswa.show', ['mahasiswa' => $mhs->id])); ?>">
								<button class="btn btn-primary">Lihat</button></a>
						</td>
						<td>
							<a href="<?php echo e(route('mahasiswa.edit', ['mahasiswa' => $mhs->id])); ?>">
								<button class="btn btn-info">Update</button></a>
						</td>
						<td>
							<form method="post" action="<?php echo e(route('mahasiswa.destroy', ['mahasiswa' => $mhs->id])); ?>">
								<?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
								<button class="btn btn-danger" type="submit">Hapus</button></form>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web-alumni-rpl-master\resources\views/mahasiswa.blade.php ENDPATH**/ ?>