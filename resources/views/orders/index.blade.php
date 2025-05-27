<h1>Список заказов</h1>

<p>
    <a href="{{ route('products.index') }}">Перейти к товарам</a> |
    <a href="{{ url('/') }}">На главную</a>
</p>

<a href="{{ route('orders.create') }}">Новый заказ</a>

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
        @foreach ($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->created_at->format('d.m.Y') }}</td>
            <td>{{ $order->customer_name }}</td>
            <td>{{ $order->status }}</td>
            <td>{{ $order->total_price }}</td>
            <td>
                <a href="{{ route('orders.show', $order) }}">Подробнее</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>