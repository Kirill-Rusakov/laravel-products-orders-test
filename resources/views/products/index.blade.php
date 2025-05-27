<h1>Список товаров</h1>

<p>
    <a href="{{ route('orders.index') }}">Перейти к заказам</a> |
    <a href="{{ url('/') }}">На главную</a>
</p>

<a href="{{ route('products.create') }}">Добавить товар</a>

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
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category->name }}</td>
            <td>{{ $product->formatted_price }}</td>
            <td>
                <a href="{{ route('products.show', $product) }}">Подробнее</a>
                <a href="{{ route('products.edit', $product) }}">Редактировать</a>
                <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Удалить</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>