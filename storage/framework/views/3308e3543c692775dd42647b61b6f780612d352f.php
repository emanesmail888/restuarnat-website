<?php $__env->startSection('content'); ?>



 <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
    <canvas class="my-4 w-100"  width="100" height="5"></canvas>

<h3 class="text-center text-success">Dishes</h3>



     <!-- INVERSE/DARK TABLE -->
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Dish Image</th>
                    <th>Dish Id</th>
                    <th>Dish Name</th>
                    <th>Dish Code</th>
                    <th>Dish Price</th>
                    <th>Dish Id</th>
                    <th>Update Dish</th>
                    <th>Delete Dish</th>
                </tr>
            </thead>

            <tbody>
                <?php
             use App\Models\Dish;
                ?>

               <?php $__currentLoopData = $dishes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td style="width:50px; border: 1px solid #333;"><img class="card-img-top img-fluid" src="<?php echo e(url('images',$dish->image)); ?>" width="50px" alt="Card image cap"></td>
                    <td style="width:50px;"><?php echo e($dish->id); ?> </td>
                    <td style="width:50px;"><?php echo e($dish->dish_name); ?> </td>
                    <td style="width:50px;"><?php echo e($dish->dish_code); ?> </td>
                    <td style="width:50px;"><?php echo e($dish->dish_price); ?> </td>


                    <td style="width:50px;"><?php echo e($dish->meal_id); ?></td>


                    <td><a href="<?php echo e(route('dishEditForm',$dish->id)); ?>" class="btn btn-success btn-small">Edit</a></td>

                    <?php echo Form::open(['method'=>'DELETE', 'action'=> ['App\Http\Controllers\DishsController@destroy', $dish->id]]); ?>



                      <td>  <?php echo Form::submit('Delete Dish', ['class'=>'btn btn-danger col-sm-12']); ?></td>

                    <?php echo Form::close(); ?>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>


</main>



 <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\restaurant\restaurant\resources\views/admin/dish/index.blade.php ENDPATH**/ ?>