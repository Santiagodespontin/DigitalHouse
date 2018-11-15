<?php $__env->startSection('content'); ?>
<section class="types">
  <?php $__currentLoopData = $tipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e(route('tipo',['tipo'=>$tipo->id])); ?>">
      <article class="type" style="background-color:<?php echo e($tipo->color); ?>">
        <h3><?php echo e($tipo->name); ?></h3>
      </article>
    </a>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Template.basic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>