@extends('admin.dash')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Adress</th>
        
      </tr>
    </thead>
    <tbody>
     
          <tr>
            <td>{{ $admin->id }}</td>
            <td>{{ $admin->name }}</td>
            <td>{{ $admin->email }}</td>
            <td>{{ $admin->phone }}</td>
            <td>{{ $admin->address }}</td>
            
            
          </tr>

    </tbody>
    <tfoot>
    </tfoot>
</table>
@endsection
