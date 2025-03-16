@extends('layouts.app')

@section('content')
<div class="w-25">
    <h2 class="text-center">Register</h2>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success w-100">Register</button>
        <p class="mt-2 text-center">Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
    </form>
</div>
@endsection