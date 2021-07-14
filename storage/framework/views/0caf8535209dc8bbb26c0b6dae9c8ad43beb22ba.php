<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="pull-left">
          <h2> Data Mahasiwa</h2>
      </div>
      <div class="pull-right">
          <a class="btn btn-primary" href="<?php echo e(route('mahasiswa.index')); ?>"> Back</a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
          <strong>Name:</strong>
          <?php echo e($mahasiswa->nama); ?>

      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
          <strong>Nrp:</strong>
          <?php echo e($mahasiswa->nrp); ?>

      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
          <strong>Nama:</strong>
          <?php echo e($mahasiswa->nama); ?>

      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
          <strong>Jurusan:</strong>
          <?php echo e($mahasiswa->jurusan); ?>

      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web-alumni-rpl-master\resources\views/show.blade.php ENDPATH**/ ?>