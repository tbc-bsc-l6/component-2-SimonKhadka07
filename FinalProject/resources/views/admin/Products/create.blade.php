<form method="POST" action="{{ route('admin.products.store') }}">
    @csrf
    <label for="name">Product Name</label>
    <input type="text" id="name" name="name" required>

    <label for="price">Price</label>
    <input type="number" id="price" name="price" required>

    <label for="description">Description</label>
    <textarea id="description" name="description"></textarea>

    <button type="submit">Create Product</button>
</form>
