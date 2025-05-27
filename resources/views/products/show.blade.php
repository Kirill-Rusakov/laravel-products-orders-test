<h1>Информация о товаре</h1>

<p><strong>Название:</strong> {{ $product->name }}</p>
<p><strong>Описание:</strong> {{ $product->description }}</p>
<p><strong>Категория:</strong> {{ $product->category->name }}</p>
<p><strong>Цена:</strong> {{ $product->formatted_price }}</p>

<a href="{{ route('products.index') }}">Назад</a>