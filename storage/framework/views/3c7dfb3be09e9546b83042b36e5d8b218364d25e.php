<h1>Информация о заказе</h1>

<p><strong>Покупатель:</strong> <?php echo e($order->customer_name); ?></p>
<p><strong>Дата:</strong> <?php echo e($order->created_at->format('d.m.Y H:i')); ?></p>
<p><strong>Товар:</strong> <?php echo e($order->product->name); ?></p>
<p><strong>Количество:</strong> <?php echo e($order->quantity); ?></p>
<p><strong>Статус:</strong> <?php echo e($order->status); ?></p>
<p><strong>Итоговая цена:</strong> <?php echo e($order->total_price); ?></p>
<p><strong>Комментарий:</strong> <?php echo e($order->comment); ?></p>

<?php if($order->status === 'new'): ?>
<form method="POST" action="<?php echo e(route('orders.update', $order)); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <button type="submit">Отметить как выполненный</button>
</form>
<?php endif; ?>

<a href="<?php echo e(route('orders.index')); ?>">Назад к заказам</a> |
<a href="<?php echo e(route('products.index')); ?>">Перейти к товарам</a> |
<a href="<?php echo e(url('/')); ?>">На главную</a><?php /**PATH C:\Web, Gulp and other\web-development\Works\laravel-orders-test\resources\views/orders/show.blade.php ENDPATH**/ ?>