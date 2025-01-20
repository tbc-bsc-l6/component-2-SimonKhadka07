<form method="POST" action="{{ route('admin.products.update', $product->id) }}">
    @csrf
    @method('PUT')
    <label for="name">Product Name</label>
    <input type="text" id="name" name="name" value="{{ $product->name }}" required>

    <label for="price">Price</label>
    <input type="number" id="price" name="price" value="{{ $product->price }}" required>

    <label for="description">Description</label>
    <textarea id="description" name="description">{{ $product->description }}</textarea>

    <button type="submit">Update Product</button>
</form>
