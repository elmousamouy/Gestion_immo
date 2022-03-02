<?php $__env->startSection('content'); ?>
<div class="container">
<div class="card" style="background-color: rgb(255, 255, 255)">
  <div class="card-header"><?php echo e(__('Ajouter un Utilisateur')); ?>  
           
  </div>
  
  <div class="card-body ">
    <div class="table-container">
    <form action="<?php echo e(route('/Users/store')); ?>" method="POST" class="m-5">
      <?php echo csrf_field(); ?>
    <div class="form-row">
      <div class="form-group input-group-sm col-md-6">
        <label for="name"><?php echo e(__('Role')); ?></label>
        <select class="form-control" id="nom_entreprises" name="role_id">
          <option selected>Choose...</option>
          <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($role->id); ?>"><?php echo e($role->role); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>
      <div class="form-group input-group-sm col-md-5">
        <label for="name"><?php echo e(__('Entreprise')); ?></label>
        <select class="form-control" id="nom_entreprises" name="entreprise_id">
          <option selected>Choose...</option>
          <?php $__currentLoopData = $entreprises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entreprise): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($entreprise->id); ?>"><?php echo e($entreprise->nom_entreprises); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>
      <div class="form-group input-group-sm col-md-4">
        <label for="name"><?php echo e(__('Nom')); ?></label>
        <input type="text" class="form-control" name="name">
        <span class="text-danger "><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
      </div>
      <div class="form-group input-group-sm col-md-4">
        <label for="name"><?php echo e(__('Prenom')); ?></label>
        <input type="text" class="form-control"  name="fname"  value="">
        <span class="text-danger "><?php $__errorArgs = ['fname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
      </div>
      <div class="form-group input-group-sm col-md-4">
        <label for="name"><?php echo e(__('Email')); ?></label>
        <input type="email" class="form-control"  name="email"  value="">
        <span class="text-danger "><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
      </div>
      <div class="form-group input-group-sm col-md-6">
        <label for="name"><?php echo e(__('Mot de Passe')); ?></label>
        <input type="password" class="form-control"  name="password"  value="">
        <span class="text-danger "><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
      </div> 
      <div class="form-group input-group-sm col-md-6">
        <label for="name"><?php echo e(__('Confirmer le Mot de Passe')); ?></label>
        <input type="password" class="form-control"  name="password2"  value="">
        <span class="text-danger "><?php $__errorArgs = ['password2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
      </div>  

    </div>
    <center>
      <a href="<?php echo e(route('user.index')); ?>"  class="btn btn-danger display: inline;" style="margin-left:8px"> Annuler</a>
      <button type="submit" class="btn btn-primary"> Enregistrer</button>
    </center>
      </form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Gestion_immo/resources/views/user/create.blade.php ENDPATH**/ ?>