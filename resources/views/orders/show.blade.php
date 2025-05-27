<h1>Информация о заказе</h1>

<p><strong>Покупатель:</strong> {{ $order->customer_name }}</p>
<p><strong>Дата:</strong> {{ $order->created_at->format('d.m.Y H:i') }}</p>
<p><strong>Товар:</strong> {{ $order->product->name }}</p>
<p><strong>Количество:</strong> {{ $order->quantity }}</p>
<p><strong>Статус:</strong> {{ $order->status }}</p>
<p><strong>Итоговая цена:</strong> {{ $order->total_price }}</p>
<p><strong>Комментарий:</strong> {{ $order->comment }}</p>

@if($order->status === 'new')
<form method="POST" action="{{ route('orders.update', $order) }}">
    @csrf
    @method('PUT')
    <button type="submit">Отметить как выполненный</button>
</form>
@endif

<a href="{{ route('orders.index') }}">Назад к заказам</a> |
<a href="{{ route('products.index') }}">Перейти к товарам</a> |
<a href="{{ url('/') }}">На главную</a>