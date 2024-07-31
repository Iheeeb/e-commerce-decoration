@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">



                <!-- Client Name -->
<div class="row mb-3" id="client-name-row">
    <form method="POST" action="{{ route('updateClientName') }}" id="edit-name-form" class="d-none">
        @csrf
        <div class="col-md-4">
            <input type="text" name="name" value="{{$client->name}}" class="form-control" id="client-name-input">
        </div>
        <input type="hidden" name="clientId" value="{{$client->id}}">
        <button type="submit" class="btn btn-primary btn-sm">Confirm</button>
    </form>

    <label for="name" class="col-md-4 col-form-label text-md-end" id="client-name">{{$client->name}}</label>
    <button type="button" class="btn btn-success btn-sm" onclick="document.getElementById('edit-name-form').classList.remove('d-none'); this.parentElement.querySelector('#client-name').classList.add('d-none'); this.classList.add('d-none');">Edit</button>
</div>

<!-- Client Email -->
<div class="row mb-3" id="client-email-row">
    <form method="POST" action="{{ route('updateClientEmail') }}" id="edit-email-form" class="d-none">
        @csrf
        <div class="col-md-4">
            <input type="text" name="email" value="{{$client->email}}" class="form-control" id="client-email-input">
        </div>
        <input type="hidden" name="clientId" value="{{$client->id}}">
        <button type="submit" class="btn btn-primary btn-sm">Confirm</button>
    </form>

    
    <label for="email" class="col-md-4 col-form-label text-md-end" id="client-email">{{$client->email}}</label>
    <button type="button" class="btn btn-success btn-sm" onclick="document.getElementById('edit-email-form').classList.remove('d-none'); this.parentElement.querySelector('#client-email').classList.add('d-none'); this.classList.add('d-none');">Edit</button>
</div>

<!-- Client Phone Number -->
<div class="row mb-3" id="client-phone-row">
    <form method="POST" action="{{ route('updateClientPhone') }}" id="edit-phone-form" class="d-none">
        @csrf
        <div class="col-md-4">
            <input type="text" name="phone" value="{{$client->phone}}" class="form-control" id="client-phone-input">
        </div>
        <input type="hidden" name="clientId" value="{{$client->id}}">
        <button type="submit" class="btn btn-primary btn-sm">Confirm</button>
    </form>

    <label for="phone" class="col-md-4 col-form-label text-md-end" id="client-phone">{{$client->phone}}</label>
    <button type="button" class="btn btn-success btn-sm" onclick="document.getElementById('edit-phone-form').classList.remove('d-none'); this.parentElement.querySelector('#client-phone').classList.add('d-none'); this.classList.add('d-none');">Edit</button>
</div>

<!-- Client Address -->
<div class="row mb-3" id="client-address-row">
    <form method="POST" action="{{ route('updateClientAddress') }}" id="edit-address-form" class="d-none">
        @csrf
        <div class="col-md-4">
            <input type="text" name="address" value="{{$client->address}}" class="form-control" id="client-address-input">
        </div>
        <input type="hidden" name="clientId" value="{{$client->id}}">
        <button type="submit" class="btn btn-primary btn-sm">Confirm</button>
    </form>

    <label for="address" class="col-md-4 col-form-label text-md-end" id="client-address">{{$client->address}}</label>
    <button type="button" class="btn btn-success btn-sm" onclick="document.getElementById('edit-address-form').classList.remove('d-none'); this.parentElement.querySelector('#client-address').classList.add('d-none'); this.classList.add('d-none');">Edit</button>
</div>

<!-- Client Password -->
<div class="row mb-3" id="client-password-row">
    <form method="POST" action="{{ route('updateClientPassword') }}" id="edit-password-form" class="d-none">
        @csrf
        <div class="col-md-4">
            <input type="password" name="password" class="form-control" id="client-password-input">
        </div>
        <input type="hidden" name="clientId" value="{{$client->id}}">
        <button type="submit" class="btn btn-primary btn-sm">Confirm</button>
    </form>

    <label for="password" class="col-md-4 col-form-label text-md-end" id="client-password">••••••••</label>
    <button type="button" class="btn btn-success btn-sm" onclick="document.getElementById('edit-password-form').classList.remove('d-none'); this.parentElement.querySelector('#client-password').classList.add('d-none'); this.classList.add('d-none');">Edit</button>
</div>

                        <div class="row mb-3">
                            

                           
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
