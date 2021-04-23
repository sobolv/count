<h3>
    <?php if($res > 0): ?>
        Результат додатній
    <?php elseif($res < 0): ?>
        Результат від'ємний
    <?php else: ?>
        Результат нуль
    <?php endif; ?>
</h3>
<h4>Числа між ними:</h4>
<?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $num): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h5><?php echo e($num); ?></h5>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\Users\Admin\site\resources\views/template.blade.php ENDPATH**/ ?>