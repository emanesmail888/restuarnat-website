<?php $__env->startSection('content'); ?>


<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">

    <canvas class="my-4 w-100"  width="100" height="1"></canvas>

<div class="row">

<div class="col-md-6">

<h3 class=" text-center text-success">Meals</h3>

<table class="table table-dark">
            <thead>
                <tr>

                    <th>Meal Name</th>
                    <th>Edit</th>
                    <th>Status</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>

            <?php $__currentLoopData = $meals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td><a href="<?php echo e(route('meal.show',$meal->id)); ?>">

                    <?php echo e($meal->name); ?></a></td>
                    <td> Edit</td>

                     <td><?php if($meal->status=='0'): ?>
                                    Enable
                                    <?php else: ?>
                                    Disable

                                    <?php endif; ?></td>


            <?php echo Form::open(['method'=>'delete', 'action'=> ['App\Http\Controllers\MealsController@destroy', $meal->id]]); ?>



                <td>  <?php echo Form::submit('Delete Meal', ['class'=>'btn btn-danger col-sm-12']); ?></td>



                <?php echo Form::close(); ?>


              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </tbody>
    </table>


</div>


      <div class="col-md-4">

        <br>

           <div class="card card-body bg-success text-white py-5">
       <h2 class="text-center">Create Meal</h2>
       <p class="lead">Lorem Ipsum has been the industry's standard dummy text ever since the</p>
          <?php echo Form::open(['route' => 'meal.store', 'method' => 'post']); ?>

            <div class="form-group">
        <?php echo e(Form::label('name', 'Name')); ?>

        <?php echo e(Form::text('name', null, array('class' => 'form-control'))); ?>

            

        <button type="submit" class="btn btn-dark btn-lg-block  ">Add Meal</button>
</div>
            



        

          <?php echo Form::close(); ?>


     </div>

                <?php echo Form::open(['route' => 'meal.store', 'method' => 'post']); ?>



                </div>
                <?php echo Form::close(); ?>

            </div><!-- /.modal-content -->

    </div>

</div>


    
    
        
    </main>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\restaurant\restaurant\resources\views/Admin/meal/index.blade.php ENDPATH**/ ?>