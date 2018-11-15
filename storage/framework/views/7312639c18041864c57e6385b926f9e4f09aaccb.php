<?php $__env->startSection('content'); ?>
<a href="<?php echo e(route('pokemon.uno',['pokemon' => $poke->id])); ?>">
  <article class="poke <?php echo e($poke->name); ?>">
  <?php if($poke->id>9): ?>
  <img src="<?php echo e(asset('poke-img/images/poke-default.jpg')); ?>" alt="Icono de <?php echo e($poke->name); ?>">
  <?php else: ?> 
  <img src="<?php echo e(asset('poke-img/images/poke-'.$poke->id.'.jpg')); ?>" alt="Icono de <?php echo e($poke->name); ?>">
  <?php endif; ?>
    <h3>Nombre: <?php echo e($poke->name); ?></h3>
    <h4>Peso: <?php echo e($poke->weight); ?></h4>
    <h4>Altura: <?php echo e($poke->height); ?></h4>
    <?php if(!empty($evolves)): ?>
    <h4>Evolucion: <?php echo e($evolves->name); ?></h4>
    <?php endif; ?>
    <h4>Tipo:
      <?php $__currentLoopData = $poke->type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php echo e($type->name); ?> |
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </h4>
  </article>
<a href="<?php echo e($poke->id); ?>/editar">Editar Pokemon</a>
  <br>
    <form id="delete" name="delete" method="POST">
  <?php echo csrf_field(); ?>
  <?php echo method_field('delete'); ?>
    <button value="borrar">Borrar Pokemon</button>
  </form>
</a>
<hr>
<div>
<a href="/pokemon">Volver</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Template.basic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>