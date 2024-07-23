@extends('admin.dash')

@section('content')
<a class="btn btn-info" href="{{route('products.index')}}">All products</a>

<br>
<div class="mb-3">
    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
    <label for="exampleFormControlInput1" class="form-label">name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Details</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="details" rows="3"></textarea>
  </div>
  <div class="mb-3">
    <label for="formFile" class="form-label">Image</label>
    <input class="form-control" type="file" id="formFile" name="image">
  </div>
  <input type="submit" value="submit">
</form>
@endsection