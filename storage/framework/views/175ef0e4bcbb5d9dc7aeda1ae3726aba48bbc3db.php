<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title trspan="authPortal"></title>
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title trspan="authPortal"></title>

    <meta http-equiv="Content-Script-Type" content="text/javascript">

    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">

    <meta http-equiv="Pragma" content="no-cache">

    <meta http-equiv="Expires" content="0">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">

 

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style.css')); ?>">

    <script src="<?php echo e(asset('assets/js/jquery-3.6.0.min.js')); ?>"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/preloader.css')); ?>">

    <script src="<?php echo e(asset('assets/js/jquery.preloader.min.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/jquery-confirm.min.css')); ?>">
    <script src="<?php echo e(asset('assets/js/jquery-confirm.min.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/jquery.preloader.min.js')); ?>"></script>

    <link href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>" rel="stylesheet" />

    <link href="https://auth.sso.elephant-vert.com/static/common/favicon.ico" rel="icon" type="image/vnd.microsoft.icon"

        sizes="16x16 32x32 48x48 64x64 128x128">

    <link href="https://auth.sso.elephant-vert.com/static/common/favicon.ico" rel="shortcut icon"

        type="image/vnd.microsoft.icon" sizes="16x16 32x32 48x48 64x64 128x128">

</head>

 

<body class="scrollbar CostumScrolBar">

    <!------------------------------------------------------------------------->

    <!--   ****** NavBar ****** -->

 

    <div class="navbarList">

        <div class='navbarItimes'>

            <img src="<?php echo e(asset('img/LOGO-EV_FR.png')); ?>" style="float:left;width: 90px;margin-left:20px;">

<a class="dropbtn ml-5 mr-2" href="<?php echo e(url('/')); ?>" style="border-radius: 3px;font-weight: bold;">Filiale</a>

           <!-- <a class="dropbtn" href="<?php echo e(url('/Biens')); ?>" style="border-radius: 3px; font-weight: bold !important">Biens</a>-->

            <?php if(Auth::user()->role_id == 1): ?>

            <a class="dropbtn" href="<?php echo e(url('Users/')); ?>" style="border-radius: 4px; font-weight: bold !important ;font-size:; ">Utilisateurs</a>

            <?php endif; ?>

            <div class="dropdownList">

                <a class="dropbtn mr-2" style="border-radius: 4px;padding: 18px 15px;color:white;  font-weight: bold !important">Base de donnée <div

                        class="separ"></div><i class="fa fa-caret-down" aria-hidden="true"></i> </a>

                <div class="dropdownList-one" style=" max-width: 150px;">

                    <a class="dItem " style=" font-weight: bold !important" href="<?php echo e(url('/Entreprise')); ?>">Filiale</a>

                    <a class="dItem" style=" font-weight: bold !important" href="<?php echo e(url('Categorie')); ?>">Categorie</a>

                </div>

            </div>

        </div>

        <div style="float:right;">
            <a style=" color: #f1f3ce;padding:16px;font-size: 14px;" class="text-uppercase"><?php echo e(Auth::user()->name); ?></a> 
            <div class="dropdownList">

                <div class='userInfoAvatar'>

                    <a class="imgUser "><img style="border-radius:50%"

                            src="<?php echo e(asset('img/user.png')); ?>"></a>

                    <div class="dropdownList-one" style=" right: 0px; ">

                        <!--<a class="dItem" href="<?php echo e(url('users/edit')); ?>">Mon compte</a>-->

                        <a style="color:Black;" class="dItem" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><?php echo e(__('Logout')); ?></a>

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">

                            <?php echo csrf_field(); ?>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="px-3 mx-auto mt-5">

        <?php echo $__env->yieldContent("content"); ?>

    </div><?php /**PATH C:\xampp\htdocs\Gestion_immo\resources\views/layouts/main.blade.php ENDPATH**/ ?>