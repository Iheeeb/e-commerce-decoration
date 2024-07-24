@extends('admin.dash')

@section('content')
<a class="btn btn-info mb-3" href="{{ route('categories.create') }}">Create New Category</a>

<table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Details</th>
        <th>Actions</th> <!-- Colonne pour les boutons -->
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $category)
          <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->details }}</td>
            <td>
                <!-- Bouton Modifier -->
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>

                <!-- Formulaire pour Supprimer -->
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
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
