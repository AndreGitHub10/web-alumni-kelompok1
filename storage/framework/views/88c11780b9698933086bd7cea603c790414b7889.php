
<?php $__env->startSection('content'); ?>
<br>
<br>
<div class="container">
  <a href="<?php echo e(url('/')); ?>" style="color:black;">Beranda > </a>
  <a href="<?php echo e(url('mahasiswa')); ?>" style="color:black;">Data Alumni > </a>
  <a href="#">Info Detail Alumni</a>
  <hr>
  <div class="card">
    <div class="row g-0">
      <div class="col-md-2">
          <img src="<?php echo e(asset($mahasiswa->gambar)); ?>" style="height: 256px; width:100%">
      </div>
      <div class="col-md-10">
        <h5 class="card-header"><?php echo e($mahasiswa->nama); ?></h5>
        <div class="card-body">
          <table>
            <tr>
              <td class="card-text">NRP</td>
              <td class="card-text"> : <?php echo e($mahasiswa->nrp); ?></td>
            </tr>
            <tr>
              <td class="card-text">Jurusan</td>
              <td class="card-text"> : <?php echo e($mahasiswa->jurusan); ?></td>
            </tr>
            <tr>
              <td class="card-text">Email</td>
              <td class="card-text"> : <?php echo e($mahasiswa->email); ?></td>
            </tr>
            <tr>
              <td class="card-text">Kontak</td>
              <td class="card-text"> : <?php echo e($mahasiswa->telepon); ?></td>
            </tr>
            <tr>
              <td class="card-text">Alamat</td>
              <td class="card-text"> : <?php echo e($mahasiswa->alamat); ?></td>
            </tr>
            <tr>
              <td class="card-text">Motivasi</td>
              <td class="card-text"> : <?php echo e($mahasiswa->motivasi); ?></td>
            </tr>
            <tr>
              <td class="card-text">Pekerjaan</td>
              <td class="card-text"> : <?php echo e($mahasiswa->pekerjaan); ?></td>
            </tr>
            <tr>
              <td class="card-text">Tempat Pekerjaan</td>
              <td class="card-text"> : <?php echo e($mahasiswa->tempatPekerjaan); ?></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/web-alumni-rpl-master/resources/views/show.blade.php ENDPATH**/ ?>