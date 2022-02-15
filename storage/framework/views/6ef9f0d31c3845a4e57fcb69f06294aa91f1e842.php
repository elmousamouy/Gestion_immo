<div class="table-responsive">

  <table class="table table-striped table-sm ">
      <thead class="thead-light">
        <tr>
          <th class="text-right text-nowrap" style="  font-weight: bold;">#</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Entreprise</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Categorie</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Dure ammortissement</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Date de mise en service</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Description de famille</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Prix</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;"> Date d'ammortissement</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">File</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Referance</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Site</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Sous-site</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Quantitee</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Compte comptable</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Code comptable</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Emplacemnt</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">N° facture</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Code barre</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">N° bc</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;"> Designation</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Date d'achat</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;"> N° serie </th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Fournisseur</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">TAUX D'AMMORTISSEMENT</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">AMMORTISSEMENT</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;"> CUMUL AMMORTISSEMENT</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;"> VNA</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Action</th>

        
        </tr>
      </thead>
      <tbody id="class">
        <?php $__currentLoopData = $biens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td class="text-right text-nowrap pr-4font-weight: bold;"><?php echo e($bien->id); ?></td>
            <td class="text-right text-nowrap pr-4font-weight: bold;"><?php echo e($bien->nom_entreprises); ?></td>
            <td class="text-right text-nowrap pr-4font-weight: bold;"><?php echo e($bien->nom_cat); ?></td>
            <td class="text-right text-nowrap pr-4font-weight: bold;"><?php echo e(($bien->duree_ammortissement)); ?></td>
            <td class="text-right text-nowrap pr-4font-weight: bold;"><?php echo e($bien->date_mise_enservice); ?></td>
            <td class="text-right text-nowrap pr-4font-weight: bold;"><?php echo e($bien->description_famille); ?></td>
            <td class="text-right text-nowrap pr-4font-weight: bold;"><?php echo e($bien->prix_achat); ?></td>
            <td class="text-right text-nowrap pr-4font-weight: bold;"><?php echo e(date('Y-m-d',strtotime($bien->duree_ammortissement."year", strtotime($bien->date_mise_enservice)))); ?></td>
            <td class="text-right text-nowrap pr-4font-weight: bold;"><a href="<?php echo e(url($bien->factur)); ?>">PDF</a></td>
            <td class="text-right text-nowrap pr-4font-weight: bold;"><?php echo e($bien->referance); ?></td>
            <td class="text-right text-nowrap pr-4font-weight: bold;"><?php echo e($bien->site); ?></td>
            <td class="text-right text-nowrap pr-4font-weight: bold;"><?php echo e(($bien->sous_site)); ?></td>
            <td class="text-right text-nowrap pr-4font-weight: bold;"><?php echo e($bien->quantitee); ?></td>
            <td class="text-right text-nowrap pr-4font-weight: bold;"><?php echo e($bien->compte_comptable); ?></td>
            <td class="text-right text-nowrap pr-4font-weight: bold;"><?php echo e($bien->code_comptable); ?></td>
            <td class="text-right text-nowrap pr-4font-weight: bold;"><?php echo e($bien->emplacement); ?></td>
            <td class="text-right text-nowrap pr-4font-weight: bold;"><?php echo e($bien->n_factur); ?></td>
            <td class="text-right text-nowrap pr-4font-weight: bold;"><?php echo e(($bien->code_barre)); ?></td>
            <td class="text-right text-nowrap pr-4font-weight: bold;"><?php echo e($bien->n_bc); ?></td>
            <td class="text-right text-nowrap pr-4font-weight: bold;"><?php echo e($bien->designation); ?></td>
            <td class="text-right text-nowrap pr-4font-weight: bold;"><?php echo e($bien->date_achat); ?></td>
            <td class="text-right text-nowrap pr-4font-weight: bold;"><?php echo e($bien->n_serie); ?></td>
            <td class="text-right text-nowrap pr-4font-weight: bold;"><?php echo e($bien->fournisseur); ?></td>

            <?php if($bien->duree_ammortissement>0): ?>
            <td class="text-right text-nowrap pr-4font-weight: bold;"><?php echo e(100/($bien->duree_ammortissement)); ?></td> 
            <?php else: ?> <td class="text-right text-nowrap pr-4font-weight: bold;">0</td>
            <?php endif; ?>

            <?php if($bien->duree_ammortissement>0): ?>
            <td class="text-right text-nowrap pr-4font-weight: bold;"><?php echo e(((100/($bien->duree_ammortissement))*($bien->prix_achat))); ?></td>
            <?php else: ?> <td class="text-right text-nowrap pr-4font-weight: bold;">0</td>
            <?php endif; ?>

         

            <?php if($bien->duree_ammortissement>0): ?>
            <td class="text-right text-nowrap pr-4font-weight: bold;"><?php echo e(((100/($bien->duree_ammortissement)*($bien->prix_achat))*($bien->duree_ammortissement))/100); ?></td>
            <?php else: ?> <td class="text-right text-nowrap pr-4font-weight: bold;">0</td> 
            <?php endif; ?>
            
            <?php if($bien->duree_ammortissement>0): ?>
            <td class="text-right text-nowrap pr-4font-weight: bold;"><?php echo e(($bien->prix_achat)-((100/($bien->duree_ammortissement)*($bien->prix_achat))*($bien->duree_ammortissement))/100); ?></td>
            <?php else: ?> <td class="text-right text-nowrap pr-4font-weight: bold;">0</td> 
            <?php endif; ?>

            
            <td class="text-right text-nowrap pr-4font-weight: bold;" class="text-right text-nowrap"><a href="<?php echo e(route('bien.edit',['id'=>$bien->id])); ?>" class="btn btn-primary btn-sm btnAction"><i class="fa fa-edit"></i></a>
            <a href="<?php echo e(route('bien.destroy',['id'=>$bien->id])); ?>" data-toggle="confirmation" class="btn btn-danger btn-sm btnAction"> <i class="fa fa-trash" aria-hidden="true"></a></td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
        
      </tbody>
    </table>
</div>
<?php if($biens instanceof \Illuminate\Pagination\LengthAwarePaginator): ?>
<div class="d-flex justify-content-center mt-2">
    <?php echo $biens->links('pagination::bootstrap-4'); ?>

</div>
<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\Gestion_immo\resources\views/Bien/table.blade.php ENDPATH**/ ?>