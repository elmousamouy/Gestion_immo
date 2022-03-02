

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap-3.1.1/css/bootstrap.min.css')); ?>">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
       <div class="row" style="margin-top:45px">
          <div class="col-md-4 col-md-offset-4">
               <h4>Login | Custom Auth</h4><hr>
               <form action="<?php echo e(route('auth.check')); ?>" method="post">
                <?php if(Session::get('fail')): ?>
                   <div class="alert alert-danger">
                      <?php echo e(Session::get('fail')); ?>

                   </div>
                <?php endif; ?>
      
               <?php echo csrf_field(); ?>
                  <div class="form-group">
                     <label>Email</label>
                     <input type="text" class="form-control" name="email" placeholder="Enter email address" value="<?php echo e(old('email')); ?>">
                     <span class="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" name="password" placeholder="Enter password">
                     <span class="text-danger"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                  </div>
                  <button type="submit" class="btn btn-block btn-primary">Sign In</button>
                  <br>
                  <a href="<?php echo e(route('auth.register')); ?>">I don't have an account, create new</a>
               </form>
          </div>
       </div>
    </div>
        
    </body><?php /**PATH /var/www/html/Gestion_immo/resources/views/user/login.blade.php ENDPATH**/ ?>