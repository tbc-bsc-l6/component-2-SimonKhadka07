@foreach ($products as $product)
    <div>
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->price }}</p>
        <p>{{ $product->description }}</p>
        <a href="{{ route('admin.products.edit', $product->id) }}">Edit</a>
        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
