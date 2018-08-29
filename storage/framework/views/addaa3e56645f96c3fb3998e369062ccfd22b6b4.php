<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Add new contact</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo e(route('contacts.index')); ?>"> Back</a>
            </div>
        </div>
    </div>


    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>


    <form action="<?php echo e(route('contacts.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>


         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Surname:</strong>
                    <input type="text" class="form-control"  name="surname" placeholder="Surname">
                </div>
            </div>

            
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Phone:</strong>
                      <input type="number" name="phone" class="form-control" placeholder="Phone">
                  </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Email:</strong>
                      <input type="email" class="form-control"  name="email" placeholder="Email">
                  </div>
              </div>

              
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Contact Type:</strong>
                        <input type="text" name="contacttype" class="form-control" placeholder="Contact Type i.e Friend">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Address:</strong>
                        <textarea class="form-control" style="height:150px" name="address" placeholder="Address"></textarea>
                    </div>
                </div>








            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>


    </form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('contacts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>