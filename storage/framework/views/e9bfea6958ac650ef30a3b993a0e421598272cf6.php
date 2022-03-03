


<div class="table-responsive">

    <table class="table table-striped table-sm ">
        <thead class="thead-light">
          <tr>
            <th  class=" text-nowrap pr-4">#</th>
            <th  class=" text-nowrap pr-4">Entreprise</th>
            <th  class=" text-nowrap pr-4"> Description Entreprise</th>
           <th  class="text-right text-nowrap pr-4">Action</th>
           </tr>
        </thead>
        <tbody id="class">
          <?php $__currentLoopData = $entreprises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entreprise): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($entreprise->id); ?></td>
              <td><?php echo e($entreprise->nom_entreprises); ?></td>
              <td><?php echo e($entreprise->descriprtion); ?></td>
              
              <td class="text-right text-nowrap"><a href="<?php echo e(route('entreprise.edit',['id'=>$entreprise->id])); ?>" class="btn btn-primary btn-sm btnAction"><i class="fa fa-edit"></i></a>
              <a href="<?php echo e(route('entreprise.destroy',['id'=>$entreprise->id])); ?>" class="btn btn-danger btn-sm btnAction"> <i class="fa fa-trash" aria-hidden="true"></a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
          
        </tbody>
      </table>
  </div><?php /**PATH C:\xampp\htdocs\Gestion_immo\resources\views/Entreprise/table.blade.php ENDPATH**/ ?>