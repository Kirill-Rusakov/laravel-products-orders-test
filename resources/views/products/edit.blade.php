<h1>Изменить товар</h1>

<form action="{{ route('products.update', $product) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Название</label>
    <input type="text" name="name" value="{{ old('name') }}">
    @error('name') <div>{{ $message }}</div> @enderror

    <label>Описание</label>
    <textarea name="description">{{ old('description') }}</textarea>

    <label>Цена (в копейках)</label>
    <input type="number" name="price" value="{{ old('price') }}">
    @error('price') <div>{{ $message }}</div> @enderror

    <label>Категория</label>
    <select name="category_id">
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    @error('category_id') <div>{{ $message }}</div> @enderror

    <button type="submit">Сохранить</button>
</form>