<div class="table-responsive">

    <table class="table table-striped table-sm ">
        <thead class="thead-light">
          <tr>
            <th  class=" text-nowrap pr-4">#</th>
            <th  class=" text-nowrap pr-4">Categorie</th>
            <th  class=" text-nowrap pr-4"> Description Categorie</th>
            <th  class="text-right text-nowrap pr-4">Action</th>
           </tr>
        </thead>
        <tbody id="class">
          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($categorie->id); ?></td>
              <td><?php echo e($categorie->nom_cat); ?></td>
              <td><?php echo e($categorie->descriprtion); ?></td>
              
              <td class="text-right text-nowrap"><a href="<?php echo e(route('categorie.edit',['id'=>$categorie->id])); ?>" class="btn btn-primary btn-sm btnAction"><i class="fa fa-edit"></i></a>
              <a href="<?php echo e(route('categorie.destroy',['id'=>$categorie->id])); ?>" class="btn btn-danger btn-sm btnAction"> <i class="fa fa-trash" aria-hidden="true"></a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
          
        </tbody>
      </table>
  </div><?php /**PATH C:\xampp\htdocs\Gestion_immo\resources\views/Categorie/table.blade.php ENDPATH**/ ?>