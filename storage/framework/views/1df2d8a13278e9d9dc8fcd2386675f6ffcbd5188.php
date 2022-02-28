


<?php $__env->startSection('content'); ?>
<?php if($message = Session::get('success')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong><?php echo e($message); ?></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>
<div class="card" style="background-color: rgb(255, 255, 255)">
  <div class="card-header"><?php echo e(__('Modifier Bien')); ?>          
  </div>
  <div class="card-body">
    <div class="table-container">
    <form action="<?php echo e(route('bien.update',['id'=>$biens->id])); ?>" method="POST" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <?php echo method_field('patch'); ?>
      <div class="form-row">
        <div class="form-group input-group-sm col-md-2">
          <label for="name"><?php echo e(__('Categorie')); ?></label>
          <select class="form-control" id="nom_entreprises" name="categorie_id">
            <option selected>Choose...</option>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($categorie->id); ?>" <?php echo e(($categorie->id == $biens->categorie_id) ? "selected" : ""); ?>><?php echo e($categorie->nom_cat); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name"><?php echo e(__('Entreprises')); ?></label>
            <select class="form-control" id="entreprises" name="entreprise_id">
              <option selected>Choose...</option>
              <?php $__currentLoopData = $entreprises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entreprise): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($entreprise->id); ?>" <?php echo e(($entreprise->id == $biens->entreprise_id) ? "selected" : ""); ?>><?php echo e($entreprise->nom_entreprises); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name"><?php echo e(__('Referance')); ?></label>
          <input type="text" class="form-control" name="referance" value="<?php echo e($biens->referance); ?>">
          <span class="text-danger "><?php $__errorArgs = ['referance'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name"><?php echo e(__('Duree')); ?></label>
          <input type="text" class="form-control"  name="duree_ammortissement"  value="<?php echo e($biens->duree_ammortissement); ?>">
          <span class="text-danger "><?php $__errorArgs = ['site'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name"><?php echo e(__('Site')); ?></label>
          <input type="text" class="form-control" name="site"  value="<?php echo e($biens->site); ?>">
          <span class="text-danger "><?php $__errorArgs = ['site'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name"><?php echo e(__('Sous Site')); ?></label>
          <input type="text" class="form-control" name="sous_site"  value="<?php echo e($biens->sous_site); ?>">
          <span class="text-danger "><?php $__errorArgs = ['sous_site'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>

        <div class="form-group input-group-sm col-md-2">
          <label for="name"><?php echo e(__('Emplacement')); ?></label>
          <input type="text" class="form-control" name="emplacement"  value="<?php echo e($biens->emplacement); ?>">
          <span class="text-danger "><?php $__errorArgs = ['emplacement'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name"><?php echo e(__('Code Barre')); ?></label>
          <input type="text" class="form-control" name="code_barre"  value="<?php echo e($biens->code_barre); ?>">
          <span class="text-danger "><?php $__errorArgs = ['code_barre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name"><?php echo e(__('Designation')); ?></label>
          <input type="text" class="form-control" name="designation"  value="<?php echo e($biens->designation); ?>">
          <span class="text-danger "><?php $__errorArgs = ['designation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name"><?php echo e(__("Date d'achat")); ?></label>
          <input type="date" class="form-control" name="date_achat"  value="<?php echo e($biens->date_achat); ?>">
          <span class="text-danger "><?php $__errorArgs = ['date_achat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name"><?php echo e(__('Fournisseur')); ?></label>
          <input type="text" class="form-control" name="fournisseur"  value="<?php echo e($biens->fournisseur); ?>">
          <span class="text-danger "><?php $__errorArgs = ['fournisseur'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name"><?php echo e(__('N° serie')); ?></label>
          <input type="text" class="form-control" name="n_serie"  value="<?php echo e($biens->n_serie); ?>">
          <span class="text-danger "><?php $__errorArgs = ['n_serie'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>

        <div class="form-group input-group-sm col-md-2">
          <label for="name"><?php echo e(__('N° facture')); ?></label>
          <input type="text" class="form-control"  name="n_factur"  value="<?php echo e($biens->n_factur); ?>">
          <span class="text-danger "><?php $__errorArgs = ['n_serie'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name"><?php echo e(__('Prix acht')); ?></label>
          <input type="text" class="form-control" name="prix_achat"  value="<?php echo e($biens->prix_achat); ?>">
          <span class="text-danger "><?php $__errorArgs = ['prix_acht'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name"><?php echo e(__('Date mise enservice')); ?></label>
          <input type="date" class="form-control" placeholder="date" name="date_mise_enservice"   value="<?php echo e($biens->date_mise_enservice); ?>">
          <span class="text-danger "><?php $__errorArgs = ['n_serie'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>

        <div class="form-group input-group-sm col-md-2">
          <label for="name"><?php echo e(__('Quantitee')); ?></label>
          <input type="text" class="form-control" placeholder="duree" name="quantitee"   value="<?php echo e($biens->quantitee); ?>">
          <span class="text-danger "><?php $__errorArgs = ['n_serie'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>

        <div class="form-group input-group-sm col-md-2">
          <label for="name"><?php echo e(__('Factur')); ?></label>
          <input type="file" class="form-control"  name="factur"  value="<?php echo e($biens->date_mise_enservice); ?>">
          <span class="text-danger "><?php $__errorArgs = ['factur'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name"><?php echo e(__('Code comptable')); ?></label>
          <input type="text" class="form-control"  name="code_comptable"   value="<?php echo e($biens->code_comptable); ?>">
          <span class="text-danger "><?php $__errorArgs = ['code_comptable'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name"><?php echo e(__('Compte comptable')); ?></label>
          <input type="text" class="form-control"  name="compte_comptable"  value="<?php echo e($biens->compte_comptable); ?>">
          <span class="text-danger "><?php $__errorArgs = ['code_comptable'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>

        <div class="form-group input-group-sm col-md-2">
          <label for="name"><?php echo e(__('Sous fammille')); ?></label>
          <input type="text" class="form-control" name="sous_famille"  value="<?php echo e($biens->sous_famille); ?>">
          <span class="text-danger "><?php $__errorArgs = ['sous_famille'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name"><?php echo e(__('Description famille')); ?></label>
          <input type="text" class="form-control" name="description_famille"  value="<?php echo e($biens->description_famille); ?>">
          <span class="text-danger "><?php $__errorArgs = ['description_famille'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>

        <div class="form-group input-group-sm col-md-2">
          <label for="name"><?php echo e(__('N° BC')); ?></label>
          <input type="text" class="form-control"  name="n_bc" value="<?php echo e($biens->n_bc); ?>">
          <span class="text-danger "><?php $__errorArgs = ['n_bc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name"><?php echo e(__('Affictation')); ?></label>
          <select class="form-control" id="affictation" name="affictation">
            <option >Choose...</option>
            <option value="1" <?php echo e((1 == $biens->affictation) ? "selected" : ""); ?>>AFFICTER</option>
            <option value="0" <?php echo e((0 == $biens->affictation) ? "selected" : ""); ?>>NON AFFICTER </option>
          </select>
        </div>
      </div>
      <center>
        
       <a href="<?php echo e(url()->previous()); ?>"  class="btn btn-danger display: inline;"> Annuler</a>
       <button type="submit"  class="btn btn-primary  display: inline;"> Enregistrer</button>
      </center>
        
    </form>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Gestion_immo\resources\views/Bien/edit.blade.php ENDPATH**/ ?>