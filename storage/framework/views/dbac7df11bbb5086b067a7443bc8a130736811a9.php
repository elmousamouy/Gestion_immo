



<?php $__env->startSection('content'); ?>
<?php if($message = Session::get('error')): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong><?php echo e($message); ?></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>
<div class="container">
<div class="card" style="background-color: rgb(255, 255, 255)">
  <div class="card-header"><?php echo e(__('Modifier un Utilisateur')); ?>  
           
  </div>
  
  <div class="card-body ">
    <div class="table-container">
    <form action="<?php echo e(route('user.update',['id'=>$users->id])); ?>" method="POST" class="m-5">
      <?php echo csrf_field(); ?>
    <div class="form-row">
      <div class="form-group input-group-sm col-md-4">
        <label for="name"><?php echo e(__('Role')); ?></label>
        <select class="form-control" id="role" name="role_id">
          <option selected>Choose...</option>
          <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($role->id); ?>" <?php echo e(($role->id == $users->role_id) ? "selected" : ""); ?>><?php echo e($role->role); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>
      <div class="form-group input-group-sm col-md-4">
        <label for="name"><?php echo e(__('Entreprise')); ?></label>
        <select class="form-control" id="nom_entreprises" name="entreprise_id">
          <option selected>Choose...</option>
          <?php $__currentLoopData = $entreprises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entreprise): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($entreprise->id); ?>" <?php echo e(($entreprise->id==$users->entreprise_id) ? "selected" : ""); ?>><?php echo e($entreprise->nom_entreprises); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>
      <div class="form-group input-group-sm col-md-4">
        <label for="name"><?php echo e(__('Nom')); ?></label>
        <input type="text" class="form-control" name="name" value="<?php echo e($users->name); ?>">
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
        <input type="text" class="form-control"  name="fname"  value="<?php echo e($users->fname); ?>">
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
        <input type="email" class="form-control"  name="email" value="<?php echo e($users->email); ?>">
        <span class="text-danger "><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
      </div>
      <div class="form-group input-group-sm col-md-4">
        <label for="name"><?php echo e(__('Mot de Passe')); ?></label>
        <input type="password" class="form-control"  name="password"  >
        <span class="text-danger "><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
      </div> 
      <div class="form-group input-group-sm col-md-4">
        <label for="name"><?php echo e(__('Mot de Passe')); ?></label>
        <input type="password" class="form-control"  name="password1">
        <span class="text-danger "><?php $__errorArgs = ['password1'];
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
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Gestion_immo\resources\views/user/edit.blade.php ENDPATH**/ ?>