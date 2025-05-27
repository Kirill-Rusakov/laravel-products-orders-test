<h1>Информация о товаре</h1>

<p><strong>Название:</strong> <?php echo e($product->name); ?></p>
<p><strong>Описание:</strong> <?php echo e($product->description); ?></p>
<p><strong>Категория:</strong> <?php echo e($product->category->name); ?></p>
<p><strong>Цена:</strong> <?php echo e($product->formatted_price); ?></p>

<a href="<?php echo e(route('products.index')); ?>">Назад</a><?php /**PATH C:\Web, Gulp and other\web-development\Works\laravel-orders-test\resources\views/products/show.blade.php ENDPATH**/ ?>