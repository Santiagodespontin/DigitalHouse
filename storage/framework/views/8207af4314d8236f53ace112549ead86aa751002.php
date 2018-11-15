<?php $__env->startSection('content'); ?>
<h3 style="text-align: center;">Pokemon</h3>

<ul style="text-align: center;">
    <?php $__currentLoopData = $pokemons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pokemon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
       <a href="/pokemon/<?php echo e($pokemon->id); ?>"> <?php echo e($pokemon->name); ?> </a>
        <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <a href="/pokemon/nuevo">Nuevo pokemon</a>
    <hr>
    <a href="/">Volver</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Template.basic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>