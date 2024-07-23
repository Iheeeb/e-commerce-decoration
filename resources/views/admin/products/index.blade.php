@extends('admin.dash')

@section('content')
<a class="btn btn-info" href="{{route('products.create')}}">Create</a>
<table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>name</th>
        <th>details</th>
        <th>image</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
          <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->details}}</td>
            <td><img src="/images/{{$product->image}}" width="300px"></td>
          </tr>
      @endforeach
    </tbody>
    <tfoot>
    </tfoot>
  </table>
    
@endsection