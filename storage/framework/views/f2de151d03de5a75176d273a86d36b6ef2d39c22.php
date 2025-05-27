<h1>Список заказов</h1>

<p>
    <a href="<?php echo e(route('products.index')); ?>">Перейти к товарам</a> |
    <a href="<?php echo e(url('/')); ?>">На главную</a>
</p>

<a href="<?php echo e(route('orders.create')); ?>">Новый заказ</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Дата</th>
            <th>Покупатель</th>
            <th>Статус</th>
            <th>Итог</th>
            <th>Действия</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($order->id); ?></td>
            <td><?php echo e($order->created_at->format('d.m.Y')); ?></td>
            <td><?php echo e($order->customer_name); ?></td>
            <td><?php echo e($order->status); ?></td>
            <td><?php echo e($order->total_price); ?></td>
            <td>
                <a href="<?php echo e(route('orders.show', $order)); ?>">Подробнее</a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH C:\Web, Gulp and other\web-development\Works\laravel-orders-test\resources\views/orders/index.blade.php ENDPATH**/ ?>