@extends('admin.dash')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Admin Profile</h1>
    
    @if (session('success'))
        <div class="alert alert-success" style="background-color: green; color: white;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.editprofile') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ auth()->user()->name }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ auth()->user()->email }}" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Type your new password" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>
@endsection
