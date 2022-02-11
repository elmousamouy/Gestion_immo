<div class="table-responsive">

  <table class="table table-striped table-sm ">
      <thead class="thead-light">
        <tr>
          <th  class="text-right text-nowrap pr-4">#</th>
          <th  class="text-right text-nowrap pr-4">Entreprise</th>
          <th  class="text-right text-nowrap pr-4">Categorie</th>
          <th  class="text-right text-nowrap pr-4">Dure ammortissement</th>
          <th  class="text-right text-nowrap pr-4">Date de mise en service</th>
          <th  class="text-right text-nowrap pr-4">Description de famille</th>
          <th  class="text-right text-nowrap pr-4">Prix</th>
          <th  class="text-right text-nowrap pr-4"> Date d'ammortissement</th>
          <th  class="text-right text-nowrap pr-4">File</th>
          <th  class="text-right text-nowrap pr-4">Referance</th>
          <th  class="text-right text-nowrap pr-4">Site</th>
          <th  class="text-right text-nowrap pr-4">Sous-site</th>
          <th  class="text-right text-nowrap pr-4">Quantitee</th>
          <th  class="text-right text-nowrap pr-4">Compte comptable</th>
          <th  class="text-right text-nowrap pr-4">Code comptable</th>
          <th  class="text-right text-nowrap pr-4">Emplacemnt</th>
          <th  class="text-right text-nowrap pr-4">N° facture</th>
          <th  class="text-right text-nowrap pr-4">Code barre</th>
          <th  class="text-right text-nowrap pr-4">N° bc</th>
          <th  class="text-right text-nowrap pr-4"> Designation</th>
          <th  class="text-right text-nowrap pr-4">Date d'achat</th>
          <th  class="text-right text-nowrap pr-4"> N° serie </th>
          <th  class="text-right text-nowrap pr-4">Fournisseur</th>
          <th  class="text-right text-nowrap pr-4">TAUX D'AMMORTISSEMENT</th>
          <th  class="text-right text-nowrap pr-4">AMMORTISSEMENT</th>
          <th  class="text-right text-nowrap pr-4"> CUMUL AMMORTISSEMENT</th>
          <th  class="text-right text-nowrap pr-4"> VNA</th>
          <th  class="text-right text-nowrap pr-4">Action</th>

        
        </tr>
      </thead>
      <tbody id="class">
        <?php $__currentLoopData = $biens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($bien->id); ?></td>
            <td><?php echo e($bien->nom_entreprises); ?></td>
            <td><?php echo e($bien->nom_cat); ?></td>
            <td><?php echo e(($bien->duree_ammortissement)); ?></td>
            <td><?php echo e($bien->date_mise_enservice); ?></td>
            <td><?php echo e($bien->description_famille); ?></td>
            <td><?php echo e($bien->prix_achat); ?></td>
            <td><?php echo e(date('Y-m-d',strtotime($bien->duree_ammortissement."year", strtotime($bien->date_mise_enservice)))); ?></td>
            <td><a href="<?php echo e(url($bien->factur)); ?>">PDF</a></td>
            <td><?php echo e($bien->referance); ?></td>
            <td><?php echo e($bien->site); ?></td>
            <td><?php echo e(($bien->sous_site)); ?></td>
            <td><?php echo e($bien->quantitee); ?></td>
            <td><?php echo e($bien->compte_comptable); ?></td>
            <td><?php echo e($bien->code_comptable); ?></td>
            <td><?php echo e($bien->emplacement); ?></td>
            <td><?php echo e($bien->n_factur); ?></td>
            <td><?php echo e(($bien->code_barre)); ?></td>
            <td><?php echo e($bien->n_bc); ?></td>
            <td><?php echo e($bien->designation); ?></td>
            <td><?php echo e($bien->date_achat); ?></td>
            <td><?php echo e($bien->n_serie); ?></td>
            <td><?php echo e($bien->fournisseur); ?></td>

            <?php if($bien->duree_ammortissement>0): ?>
            <td><?php echo e(100/($bien->duree_ammortissement)); ?></td> 
            <?php else: ?> <td>0</td>
            <?php endif; ?>

            <?php if($bien->duree_ammortissement>0): ?>
            <td><?php echo e(((100/($bien->duree_ammortissement))*($bien->prix_achat))); ?></td>
            <?php else: ?> <td>0</td>
            <?php endif; ?>

         

            <?php if($bien->duree_ammortissement>0): ?>
            <td><?php echo e(((100/($bien->duree_ammortissement)*($bien->prix_achat))*($bien->duree_ammortissement))/100); ?></td>
            <?php else: ?> <td>0</td> 
            <?php endif; ?>
            
            <?php if($bien->duree_ammortissement>0): ?>
            <td><?php echo e(($bien->prix_achat)-((100/($bien->duree_ammortissement)*($bien->prix_achat))*($bien->duree_ammortissement))/100); ?></td>
            <?php else: ?> <td>0</td> 
            <?php endif; ?>

            
            <td class="text-right text-nowrap"><a href="<?php echo e(route('bien.edit',['id'=>$bien->id])); ?>" class="btn btn-primary btn-sm btnAction"><i class="fa fa-edit"></i></a>
            <a href="<?php echo e(route('bien.destroy',['id'=>$bien->id])); ?>" class="btn btn-danger btn-sm btnAction"> <i class="fa fa-trash" aria-hidden="true"></a></td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
        
      </tbody>
    </table>
</div>

  <div class="d-flex justify-content-center mt-2">
    <?php echo $biens->links('pagination::bootstrap-4'); ?>

  </div><?php /**PATH C:\xampp\htdocs\Gestion_immo\resources\views/Bien/table.blade.php ENDPATH**/ ?>