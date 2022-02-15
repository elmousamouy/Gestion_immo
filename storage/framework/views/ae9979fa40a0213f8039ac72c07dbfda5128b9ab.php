

<?php $__env->startSection('content'); ?>
<div class="container text-center">

<div class="form-row "  style="margin-top:100px;">
<div class="card" style="width: 10rem ; margin:10px !important"><a href="<?php echo e(route('bien.filiale',['entreprise_id'=>1])); ?>"><img class="card-img-top"  height="150px" style="width: 10rem10px" src="<?php echo e(asset('img/LOGO-EV_FR.png')); ?>">
    <div class="card-body">
      <h5 class="card-title">EV Maroc</h5>
    </div></a>
  </div>
  <div class="card" style="width: 10rem ; margin:10px !important"><a href="<?php echo e(route('bien.filiale',['entreprise_id'=>2])); ?>"><img class="card-img-top"  height="150px" style="width: 10rem10px" src="<?php echo e(asset('img/ameo.png')); ?>">
    <div class="card-body">
      <h5 class="card-title">AMEO</h5>
    </div></a>
  </div>
  <div class="card" style="width: 10rem ; margin:10px !important"><a href="<?php echo e(route('bien.filiale',['entreprise_id'=>5])); ?>"><img class="card-img-top" height="150px" style="width: 10rem10px" src="<?php echo e(asset('img/LOGO-EV_GB.png')); ?>">
    <div class="card-body">
      <h5 class="card-title">GRERN BIZ</h5>
    </div></a>
  </div>

  <div class="card" style="width: 10rem ; margin:10px !important"><a href="<?php echo e(route('bien.filiale',['entreprise_id'=>3])); ?>"><img class="card-img-top" height="150px" style="width: 10rem10px" src="<?php echo e(asset('img/bics.png')); ?>">
    <div class="card-body">
      <h5 class="card-title">BICS</h5>
    </div></a>
  </div>

  <div class="card" style="width: 10rem ; margin:10px !important"><a href="<?php echo e(route('bien.filiale',['entreprise_id'=>4])); ?>"><img class="card-img-top"  height="150px" style="width: 10rem10px" src="<?php echo e(asset('img/LOGO-EV_FR.png')); ?>">
    <div class="card-body">
      <h5 class="card-title">CDP</h5>
    </div></a>
  </div>
  <div class="card" style="width: 10rem ; margin: 10px 0 10px 10px   !important"><a href="<?php echo e(route('bien.filiale',['entreprise_id'=>6])); ?>"><img class="card-img-top"   height="150px" style="width: 10rem10px" src="<?php echo e(asset('img/LacqLogo.jpg')); ?>">
    <div class="card-body">
      <h5 class="card-title">LACQ</h5>
    </div></a>
  </div>
</div>
</div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Gestion_immo\resources\views/Bien/filiale.blade.php ENDPATH**/ ?>