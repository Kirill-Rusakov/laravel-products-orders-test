<h1>Список товаров</h1>

<p>
    <a href="<?php echo e(route('orders.index')); ?>">Перейти к заказам</a> |
    <a href="<?php echo e(url('/')); ?>">На главную</a>
</p>

<a href="<?php echo e(route('products.create')); ?>">Добавить товар</a>

<table>
    <thead>
        <tr>
            <th>Название</th>
            <th>Категория</th>
            <th>Цена</th>
            <th>Действия</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($product->name); ?></td>
            <td><?php echo e($product->category->name); ?></td>
            <td><?php echo e($product->formatted_price); ?></td>
            <td>
                <a href="<?php echo e(route('products.show', $product)); ?>">Подробнее</a>
                <a href="<?php echo e(route('products.edit', $product)); ?>">Редактировать</a>
                <form action="<?php echo e(route('products.destroy', $product)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit">Удалить</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH C:\Web, Gulp and other\web-development\Works\laravel-orders-test\resources\views/products/index.blade.php ENDPATH**/ ?>