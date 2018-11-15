<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="title m-b-md">
        Laramon
    </div>

    <div class="links">
        <a href="<?php echo e(route('pokemon.todos')); ?>">Pokemon</a>
        <a href="<?php echo e(route('tipos')); ?>">Types</a>
        <a href="http://es.pokemon.wikia.com/wiki/WikiDex">Pokemon Wiki</a>
        <a href="https://github.com/laravel/laravel">Laravel</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Template.basic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>