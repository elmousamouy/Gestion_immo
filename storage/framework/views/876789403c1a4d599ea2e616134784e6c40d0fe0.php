<?php $__env->startSection('content'); ?>
<div class="card" style="background-color: rgb(255, 255, 255)">
  <div class="card-header"><?php echo e(__('Modifier Entreprise')); ?>  
           
  </div>
  <div class="card-body">
    <div class="table-container">
        <form action="<?php echo e(route('entreprise.update',['id'=>$entreprises->id])); ?>"  class=" " method="POST">
      <?php echo csrf_field(); ?>
    <div class="form-row">
      <div class="form-group input-group-sm col-md-6">
        <label for="name"><?php echo e(__('Entreprise')); ?></label>
        <input type="text" class="form-control" name="nom_entreprises" value="<?php echo e($entreprises->nom_entreprises); ?>">
        <span class="text-danger "><?php $__errorArgs = ['nom_entreprises'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
      </div>
      <div class="form-group input-group-sm col-md-6">
        <label for="name"><?php echo e(__('Description entreprise')); ?></label>
        <input type="text" class="form-control"  name="descriprtion" value="<?php echo e($entreprises->descriprtion); ?>">
        <span class="text-danger "><?php $__errorArgs = [''];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
      </div>  
    </div>
    <center><button type="submit" class="btn btn-primary">Enregestrer</button></center>
      </form>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Gestion_immo/resources/views/Entreprise/edit.blade.php ENDPATH**/ ?>