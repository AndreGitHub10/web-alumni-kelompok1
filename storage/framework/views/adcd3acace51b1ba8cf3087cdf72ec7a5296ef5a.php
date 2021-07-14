
<?php $__env->startSection('content'); ?>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="pull-left">
        <h1><strong><?php echo e($lkr->nama); ?></strong></h1>
      </div>
    </div>
    <p>
      <a href="<?php echo e(url('/')); ?>" style="color:black;">Beranda > </a>
      <a href="<?php echo e(route('loker')); ?>" style="color:black;">Lowongan > </a>
      <a href="#">Lihat Detail</a>
    </p>
    <hr>
  </div>
  <br>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="col-md-3">
        <img src="<?php echo e(asset($lkr->fotoloker)); ?>" style="height: 200%; width:250%">
      </div>
    </div>
  </div>
</div>
<br>
<br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/web-alumni-rpl-master/resources/views/showloker.blade.php ENDPATH**/ ?>