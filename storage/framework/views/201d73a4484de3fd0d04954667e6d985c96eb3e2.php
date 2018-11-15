<?php $__env->startSection('content'); ?>
<section class="types">
  <a href="<?php echo e(route('tipo',['tipo' => $tipo->id])); ?>">
  <article class="type" style="background-color:<?php echo e($tipo->color); ?>">
      <h3><?php echo e($tipo->name); ?></h3>
    </article>
  </a>
</section>
<section class="pokemon">
  <?php $__currentLoopData = $tipo->pokemon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poke): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <a href="<?php echo e(route('pokemon.uno',['pokemon' => $poke->id])); ?>">
    <article class="poke <?php echo e($tipo->name); ?>">
    <img src="<?php echo e(asset('poke-img/images/poke-'.$poke->id.'.jpg')); ?>" alt="Icono de <?php echo e($poke->name); ?>">
      <h3><?php echo e($poke->name); ?></h3>
      <h4><?php echo e($poke->weight); ?></h4>
      <h4><?php echo e($poke->height); ?></h4>
      <h4><?php echo e($poke->evolves); ?></h4>
    </article>
  </a>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Template.basic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>