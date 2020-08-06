<?php $__env->startSection('page-title', 'Home'); ?>

<?php $__env->startPush('head-styles'); ?>
    <link rel="stylesheet" href="<?php echo e(URL); ?>res/css/style.css">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main-content'); ?>
	<?php require ROOT.'App/scripts/listar-produtos.php' ?>
    <div class="actionBar">
		<h1>MyApp</h1>
	</div>

	<a href="<?php echo e(URL); ?>home">Home</a>
	
	<div class="fab">
		+
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_templates/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/test/res/pages/home.blade.php ENDPATH**/ ?>