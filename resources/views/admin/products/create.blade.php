@extends('admin.dash')

@section('content')
<a class="btn btn-info" href="{{ route('products.index') }}">All products</a>

<br>
<div class="mb-3">
    <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
    </div>
    <div class="mb-3">
        <label for="details" class="form-label">Details</label>
        <textarea class="form-control" id="details" name="details" rows="3" required>{{ $product->details }}</textarea>
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-control" id="category" name="category" required>
            <option value="" disabled>Select a category</option>
            @foreach($categories as $category)
                <option value="{{ $category->name }}" {{ $product->category == $category->name ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
    </div>
    <div class="mb-3">
        <label for="quantity" class="form-label">Quantity</label>
        <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}" required>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input class="form-control" type="file" id="image" name="image">
        <img src="/images/{{ $product->image }}" width="300px" class="mt-3">
    </div>
    <input type="submit" value="Submit" class="btn btn-primary">
</form>
@endsection
