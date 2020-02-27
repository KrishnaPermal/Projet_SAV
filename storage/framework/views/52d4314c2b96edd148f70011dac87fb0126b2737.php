<?php $__env->startSection('content'); ?>
<br><br><br>
<div class="content">
  <div class="row justify-content-center mr-5"><br>
     <div class="col-md-5">
                  
                  <h1 class="text-center">ECHANGES</h1>
                     <div class="card-body m-2">
                        <div class="d-flex justify-content-center">
                           <div class="card border-info mb-5" style="max-height:30rem">
                              <div class="card-body text-info">

                              
                              <form action="/exchange" method="post">
                                  <?php echo e(csrf_field()); ?>

                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Date</label>
                                  <input class="form-control" type="date" name="date" value="yyyy-mm-dd">
                                  </div>

                                  <div class="form-group"><br>
                                    <label for="exampleFormControlSelect1">Type de Contact</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="id_exchange_types">
                                    <?php $__currentLoopData = $exchange_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exchange_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option href="#"><?php echo e($exchange_type->id); ?></option>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                                  </div><br>

                                  <div class="form-group"><br>
                                    <label for="exampleFormControlSelect1">Operateurs</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="id_users">
                                    <?php $__currentLoopData = $operateurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $operateur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option href="#"><?php echo e($operateur->id); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                                  </div><br>

                                  <div class="form-group"><br>
                                    <label for="exampleFormControlSelect1">Clients</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="id_clients">
                                    <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option href="#"><?php echo e($client->id); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                                  </div><br>


                                  <div class="form-group">
                                      <label for="commentaire">Commentaire</label>
                                      <textarea class="form-control" id="commentaire" rows="3" name="commentaire"></textarea>
                                  </div>


                                  <a href="/clients/<?php echo e($client->id); ?>/historic"><button class="btn btn-outline-info">Ajout</button></a>
                                
                              </form> 
                              
                              </div>
                                    <p class="text-center"><?php echo e($ajouter); ?></p>  
                            </div>
                        </div>
                    </div>
          
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cyberun-2/projet/Projet_SAV/resources/views/clients/exchange.blade.php ENDPATH**/ ?>