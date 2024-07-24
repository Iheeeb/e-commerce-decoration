@extends('admin.dash')

@section('content')
<a class="btn btn-info" href="{{route('products.create')}}">Create</a>
<table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>name</th>
        <th>details</th>
        <th>category</th>
        <th>price</th>
        <th>quantity</th>
        <th>image</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
          <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->details}}</td>
            <td>{{$product->category}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->quantity}}</td>

            <td><img src="/images/{{$product->image}}" width="200px"></td>
            <td>
              <!-- Bouton Modifier -->
              <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>

              <!-- Formulaire pour Supprimer -->
              <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
              </form>
          </td>
          </tr>
      @endforeach
    </tbody>
    <tfoot>
    </tfoot>
  </table>
    
@endsection