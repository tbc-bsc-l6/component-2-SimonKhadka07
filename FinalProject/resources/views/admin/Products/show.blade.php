@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Product Details</h1>

        <p><strong>Name:</strong> {{ $product->name }}</p>
        <p><strong>Price:</strong> ${{ $product->price }}</p>
        <p><strong>Description:</strong> {{ $product->description }}</p>

        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
