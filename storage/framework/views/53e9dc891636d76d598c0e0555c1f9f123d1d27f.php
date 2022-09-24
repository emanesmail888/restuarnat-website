<h1>Search results</h1>



    <h3>Pages:</h3>

    <ul>

        <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

           <?php echo e($page->dish_name); ?>

           <?php echo e($page->dish_id); ?>



        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>




<?php /**PATH C:\restaurant\restaurant\resources\views/search.blade.php ENDPATH**/ ?>