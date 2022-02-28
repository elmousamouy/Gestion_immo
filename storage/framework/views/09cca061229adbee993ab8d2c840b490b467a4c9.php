
<style>
  th {
      font-size: 11px;
  }
  td {
      font-size: 13px;
  }
  .btnAction {
      font-size: 8px;
  }
  .div-upload {
    position: relative;
    overflow: hidden;
  }
  .input-upload {
    position: absolute;
    font-size: 10px;
    opacity: 0;
    right: 0;
    top: 0;
  }
</style>
<?php $__env->startSection('content'); ?>
<?php if($message = Session::get('success')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong><?php echo e($message); ?></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>
<?php if($message = Session::get('error')): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong><?php echo e($message); ?></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>
<div class="card" style="background-color: rgb(255, 255, 255)">
  <div class="card-header"><?php echo e(__('Biens')); ?>

          <a class="btn btn-success btn-sm float-right" style="font-weight: bold !important ;" href="<?php echo e(url('/Bien/create')); ?>">Ajouter un Bien</a>
          <a class="btn btn-primary btn-sm float-right px-2 mr-2" style="padding: 8px 0px; " href="<?php echo e(url('/Biens/export')); ?>" ><i class="fa fa-download" aria-hidden="true"></i></a>
        
          <form action="<?php echo e(url('/Biens/import')); ?>" method="POST"  style="font-weight: bold !important ;" enctype="multipart/form-data" class="d-inline form-upload float-right">
            <?php echo csrf_field(); ?>
            <div class="d-inline div-upload">
              <i class="fa fa-upload btn btn-success btn-sm px-2 mr-2" style="padding: 7px 0px; " aria-hidden="true"></i>
              <input type="file" class="input-upload" placeholder="factur" name="biens" >
            </div>
          </form>
          

          <input type="text" name="user_name" id="buffer" class="ml-3 d-inline  form-control form-control-sm col-1"  style="font-weight: bold !important ;" >
          
           

          <select  style="font-weight: bold !important ;" id="categorie"  class="ml-3 d-inline  form-control form-control-sm col-1 searchSelect" >
            <option  value="" selected> CATEGORIE...</option>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($categorie->id); ?>"><?php echo e($categorie->nom_cat); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select><!--
          <select name="" id="entreprise" class="ml-3 d-inline  form-control form-control-sm col-2 searchSelect">
            <option value="" selected>PAR ENTREPRISE...</option>
            <?php $__currentLoopData = $entreprises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entreprise): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($entreprise->id); ?>"><?php echo e($entreprise->nom_entreprises); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
          
          <select name="" id="vna" class="ml-3 d-inline  form-control form-control-sm col-2 ">
            <option  value="" selected>PAR VNA...</option>
            <option value="0">VNA</option>
            <option value="2">AUTRE</option>
          </select>-->
        
          
            <select  style="font-weight: bold !important ;" class="ml-3 d-inline  form-control form-control-sm col-2 searchSelect " id="affictation" name="affictaion">
              <option  value=""  selected>   PAR AFFECTATION ...</option>
              <option  value="1">AFFECTER</option>
              <option value="0" >NON AFFECTER</option>
            </select>
            <!--
            <select  style="font-weight: bold !important ;" class="ml-3 d-inline  form-control form-control-sm col-1 searchSelect " id="vna" name="vna">
              <option  value=""  selected></option>
              <option  value="1">Completemment ammortir</option>
              <option value="0" >Quelle chose</option>
            </select>
            <input type="date" name="user_name" id="buffer" class="ml-3 d-inline  form-control form-control-sm col-2"  style="font-weight: bold !important ;" >
            <input type="date" name="user_name" id="buffer" class="ml-3 d-inline  form-control form-control-sm col-2"  style="font-weight: bold !important ;" >
          -->
    </div>
  <div class="card-body">
    <div class="table-container">
      <?php echo $__env->make('Bien.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  </div>
</div>
<script>
    $(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.input-upload').on("change", function(){ 
      $('.form-upload').submit();
    });
    
 
    $("#buffer").on('keyup',function(){
      buffer = $("#buffer").val()
      if(buffer!=''){

        $.ajax({
          url:'<?php echo e(url("/Bien/search")); ?>',
          method : 'post',
          data:{
            "_token" : "<?php echo e(csrf_token()); ?>",
            "buffer" : buffer,
            "filiale" : <?php echo e($entreprise_id ?? 0); ?>,
            "categorie_id" : $("#categorie").val(),
            "affictation" : $("#affictation").val(),
            "vna" : $("#vna").val()
            
            

          },
          success:function(data){
            $('.table-container').html(data.table);
            console.log(data);
          }

        });

      }

    })
    
   
    $( ".searchSelect" ).change(function(){
      entreprise = $("#entreprise").val();
      categorie = $("#categorie").val();
      affictation = $("#affictation").val();
      vna =  $("#vna").val();
      buffer = $("#buffer").val()

      if(entreprise!='' || categorie!='' || affictation!='' ){
        $.ajax({
          url:'<?php echo e(url("/Bien/search")); ?>',
          method : 'post',
          data:{
            "_token" : "<?php echo e(csrf_token()); ?>",
            "categorie" : categorie,
            "affictation" : affictation,
            "vna" : vna,
             "filiale" : <?php echo e($entreprise_id ?? 0); ?>,
             "buffer" : buffer,

          },
          success:function(data){
            $('.table-container').html(data.table);
            console.log(data);
          }

        });

      }

    })
    
  });


</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Gestion_immo\resources\views/Bien/index.blade.php ENDPATH**/ ?>