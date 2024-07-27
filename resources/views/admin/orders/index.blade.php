@extends('admin.dash')

@section('content')


<table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Client Name</th>
        <th>Date</th>
        <th>Content</th>
        <th>Total</th>
        <th>Status</th>
        <th>Actions</th> <!-- Colonne pour les boutons -->
      </tr>
    </thead>
    <tbody>
      @foreach ($orders as $order)
          <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->clientname }}</td>
            <td>{{ $order->date }}</td>
            <td>{{ $order->content }}</td>
            <td>{{ $order->total }}</td>
            <td>{{ $order->state }}</td>
            <td>
                    <!-- Bouton Confirmer -->
                    @if ($order->state=='en attente de confirmation')
                    <form action="{{ route('orders.confirm', $order->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Are you sure you want to confirm this order?')">Confirm</button>
                    </form>
                    @endif
                    



    

                <!-- Formulaire pour Supprimer -->
                <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
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
