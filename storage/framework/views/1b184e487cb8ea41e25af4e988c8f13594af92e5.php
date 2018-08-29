<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>View All</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('contacts.create')); ?>"> Create New contact</a>
            </div>
        </div>
    </div>


    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Contact Type</th>
            <th>Address</th>
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($contact->name); ?></td>
            <td><?php echo e($contact->surname); ?></td>
            <td><?php echo e($contact->phone); ?></td>
            <td><?php echo e($contact->email); ?></td>
            <td><?php echo e($contact->contacttype); ?></td>
            <td><?php echo e($contact->address); ?></td>
            <td>
                <form action="<?php echo e(route('contacts.destroy',$contact->id)); ?>" method="POST">


                    <a class="btn btn-info" href="<?php echo e(route('contacts.show',$contact->id)); ?>">Show</a>

 
                    <a class="btn btn-primary" href="<?php echo e(route('contacts.edit',$contact->id)); ?>">Edit</a>


                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

   
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>


    <?php echo $contacts->links(); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('contacts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>