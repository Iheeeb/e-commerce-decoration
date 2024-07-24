@extends('admin.dash')

@section('content')
<h1>Edit Category</h1>

<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
    </div>
    <div class="mb-3">
        <label for="details" class="form-label">Details</label>
        <textarea class="form-control" id="details" name="details" rows="3">{{ $category->details }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

<a href="{{ route('categories.index') }}" class="btn btn-secondary mt-3">Back</a>
@endsection
