    
    <?php $__env->startSection('content'); ?>
 <br><br>
    <div class="content">
      <div class="class row justify-content-center">
         <div class="col-md-5">
            <div class="class card">
            

                  <ul>
                         <div class="card-body m-1">
                            <div class="col-md-8">
                               <div class="card border-info mb-3" style="max-width: 18rem;">
                                  <div class="card-header">ECHANGES</div>
                                  <div class="card-body text-info">
                                   
                                    <form action="/exchange" method="post">
                                      <?php echo e(csrf_field()); ?>


                                      <input type="date" name="date" placeholder="Date">

                                      <div class="dropdown"><br><br>
                                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Type de Contact
                                          </button>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                              <?php $__currentLoopData = $exchange_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exchange_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <a class="dropdown-item" href="#"><?php echo e($exchange_type->type); ?></a>
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          </div>
                                      </div><br>

                                      <div class="dropdown">
                                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Operateurs
                                          </button>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                              <?php $__currentLoopData = $operateurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $operateur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <a class="dropdown-item" href="#"><?php echo e($operateur->nom); ?></a>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          </div>
                                      </div><br>

                                      <div class="dropdown">
                                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Client
                                          </button>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                              <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <a class="dropdown-item" href="#"><?php echo e($client->nom); ?></a>
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          </div>
                                      </div><br>

                                      <div class="form-group">
                                          <label for="exampleFormControlTextarea1">Commentaire</label>
                                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                      </div>
                                     
                                      <input type="submit" value="Ajout d'un échange">
                                    </form>

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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cyberun-2/projet/Projet_SAV/resources/views/clients/exchange.blade.php ENDPATH**/ ?>