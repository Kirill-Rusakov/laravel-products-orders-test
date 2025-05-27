<h1>Создать заказ</h1>

<form action="{{ route('orders.store') }}" method="POST">
    @csrf

    <label>ФИО покупателя</label>
    <input type="text" name="customer_name" value="{{ old('customer_name') }}">
    @error('customer_name') <div>{{ $message }}</div> @enderror

    <label>Товар</label>
    <select name="product_id">
        @foreach ($products as $product)
        <option value="{{ $product->id }}">{{ $product->name }}</option>
        @endforeach
    </select>

    <label>Количество</label>
    <input type="number" name="quantity" value="{{ old('quantity', 1) }}">

    <label>Комментарий</label>
    <textarea name="comment">{{ old('comment') }}</textarea>

    <button type="submit">Создать заказ</button>
</form>