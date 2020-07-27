<?php $__env->startSection('body'); ?>
    <header>
        
    </header>

    <main>
        <div class="container"><?php echo $__env->yieldContent('main-content'); ?></div>
    </main>
    
    <footer></footer>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('basic_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/test/res/pages/template.blade.php ENDPATH**/ ?>