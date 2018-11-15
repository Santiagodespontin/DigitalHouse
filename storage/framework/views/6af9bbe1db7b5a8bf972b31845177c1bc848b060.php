<?php $__env->startSection('content'); ?>
<form id="create" name="create" method="POST" style="text-align: center;" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?php echo e($poke->weight); ?>">
        </div>
        <div>
            <label for="weight">Weight</label>
            <input type="text" name="weight" id="weight"value= <?php echo e(old('weight')); ?>>
        </div>
        <div>
            <label for="height">Height</label>
            <input type="text" name="height" id="height"value= <?php echo e(old('height')); ?>>
        </div>
        
        <button type="submit" class="button button-primary">Editar Pokemon</button>
    </form>        

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Template.basic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>