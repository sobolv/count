<html>
<body>
    <h1>Результат віднімання:</h1>
    <h4><?php echo e($num1); ?> - <?php echo e($num2); ?> = <?php echo e($res); ?> </h4>

    
</body>
</html>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\site\resources\views/subtract.blade.php ENDPATH**/ ?>