<?php $__env->startSection('content'); ?>
    <form id="create" name="create" method="POST" style="text-align: center;" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value= <?php echo e(old('name')); ?>>
            </div>
            <div>
                <label for="weight">Weight</label>
                <input type="text" name="weight" id="weight"value= <?php echo e(old('weight')); ?>>
            </div>
            <div>
                <label for="height">Height</label>
                <input type="text" name="height" id="height"value= <?php echo e(old('height')); ?>>
            </div>
            
            <div>
                    <label for="evolves">Evolves</label>
                    <select name="evolves" id="evolves">
                            <?php $__currentLoopData = $pokemon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poke): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option name="type_id[]" id="type_id[]" value="<?php echo e($poke->id); ?>"><?php echo e($poke->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
            </div>
            <div>
                <label for="type_id">Type</label><br>
                    <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <input type="checkbox"name="type_id[]" id="type_id[]" value="<?php echo e($t->id); ?>"><?php echo e($t->name); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <button type="submit" class="button button-primary">Agregar Pokemon</button>
        </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Template.basic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>