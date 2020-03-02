<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>SAV</title>

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!--CSS--> 
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/app.css')); ?>">
</head>


<br>
<body>
   
   
   <?php $__env->startSection('content'); ?>
    
      <h3 class="text-center">Informations Supplémentaires</h3>
      <div class="content">
         <div class="class row justify-content-center">
            <div class="col-md-8">
               <div class="class card">
                  <div class="card-body">
   
                     <ul>
                        <div class="card m-4">
                            <div class="card-body m-1">
                               <div class="col-md-8">
                                  <div class="card border-info mb-3" style="max-width: 18rem;">
                                     <div class="card-header">INFORMATION DU CLIENT</div>
                                     <div class="card-body text-info">
                                       ID : <?php echo e($client->id); ?> <br> 
                                       Nom : <?php echo e($client->nom); ?> <br> 
                                       Prenom : <?php echo e($client->prenom); ?> <br>
                                       Email : <?php echo e($client->email); ?> <br> 
                                       Téléphone : <?php echo e($client->tel); ?> <br>   
                                     </div>
                                   </div> 
                               </div>
                            </div>
                          </div>
                     </ul>

                  </div>
               </div>
            </div>
         </div>
         <?php $__env->stopSection(); ?>
   <!-- SCRIPT -->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cyberun-2/projet/Projet_SAV/resources/views/fiche.blade.php ENDPATH**/ ?>