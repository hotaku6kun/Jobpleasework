<?php $__env->startSection('title', 'Andrés Hernádnez - inicio'); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-xs-12 bg">
		<div class="col-xs-5 frontText">
			<h1>¿Buscando a alguien para trabajar contigo?</h1>
			<br>
			<h2>¡No busques más!</h2><br>
			<p>Observa todas las cualidades, habilidades y muestras con las que cuento</p>
			<a class="btn btn-primary"  href="<?php echo e(route('acerca')); ?>">Muestrame más</a>
			<br>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>