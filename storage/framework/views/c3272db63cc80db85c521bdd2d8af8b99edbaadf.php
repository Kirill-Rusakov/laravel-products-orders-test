<h1>Создать заказ</h1>

<form action="<?php echo e(route('orders.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <label>ФИО покупателя</label>
    <input type="text" name="customer_name" value="<?php echo e(old('customer_name')); ?>">
    <?php $__errorArgs = ['customer_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <label>Товар</label>
    <select name="product_id">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($product->id); ?>"><?php echo e($product->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

    <label>Количество</label>
    <input type="number" name="quantity" value="<?php echo e(old('quantity', 1)); ?>">

    <label>Комментарий</label>
    <textarea name="comment"><?php echo e(old('comment')); ?></textarea>

    <button type="submit">Создать заказ</button>
</form><?php /**PATH C:\Web, Gulp and other\web-development\Works\laravel-orders-test\resources\views/orders/create.blade.php ENDPATH**/ ?>