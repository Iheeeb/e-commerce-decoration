@extends('admin.dash')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach ($clients as $client)
          <tr>
            <td>{{ $client->id }}</td>
            <td>{{ $client->name }}</td>
            <td>{{ $client->email }}</td>
            
            
          </tr>
      @endforeach
    </tbody>
    <tfoot>
    </tfoot>
</table>
@endsection
