<h2>Your Cart</h2>
@foreach ($cart as $item)
    <div>
        <h3>{{ $item['name'] }}</h3>
        <p>Price: ${{ $item['price'] }}</p>
        <p>Quantity: {{ $item['quantity'] }}</p>
        <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Remove from Cart</button>
        </form>
    </div>
@endforeach
