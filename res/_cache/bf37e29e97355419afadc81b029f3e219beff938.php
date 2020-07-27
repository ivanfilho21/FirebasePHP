<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, user-scalable=1">
    <title><?php echo $__env->yieldContent('page-title'); ?></title>
    <?php echo $__env->yieldPushContent('head-styles'); ?>
    <?php echo $__env->yieldPushContent('head-scripts'); ?>
</head>
<body>
    <?php echo $__env->yieldContent('body'); ?>
    <?php echo $__env->yieldPushContent('body-scripts'); ?>
</body>
</html><?php /**PATH /var/www/html/test/res/pages/basic_template.blade.php ENDPATH**/ ?>