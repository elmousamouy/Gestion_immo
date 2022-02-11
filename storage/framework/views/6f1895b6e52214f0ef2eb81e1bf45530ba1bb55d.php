


<div class="table-responsive">

    <table class="table table-striped table-sm ">
        <thead class="thead-light">
          <tr>
            <th  class=" text-nowrap pr-4">#</th>
            <th  class=" text-nowrap pr-4">NOM</th>
            <th  class=" text-nowrap pr-4">PRENOM</th>
            <th  class=" text-nowrap pr-4">EMAIL</th>
            <th  class=" text-nowrap pr-4">ROLE</th>
            <th  class="text-right text-nowrap pr-4">Action</th>
           </tr>
        </thead>
        <tbody id="class">
          <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($user->id); ?></td>
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->fname); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td><?php echo e($user->role); ?></td>
              <td class="text-right text-nowrap"><a href="<?php echo e(route('user.edit',['id'=>$user->id])); ?>" class="btn btn-primary btn-sm btnAction"><i class="fa fa-edit"></i></a>
              <a href="<?php echo e(route('user.destroy',['id'=>$user->id])); ?>" class="btn btn-danger btn-sm btnAction"> <i class="fa fa-trash" aria-hidden="true"></a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
          
        </tbody>
      </table>
  </div><?php /**PATH /var/www/html/Gestion_immo/resources/views/user/table.blade.php ENDPATH**/ ?>