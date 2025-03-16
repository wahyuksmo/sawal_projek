@extends('layouts.app')

@section('content')
<div class="w-25">
    <h2 class="text-center">Login</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
        <p class="mt-2 text-center">Belum punya akun? <a href="{{ route('register') }}">Daftar</a></p>
    </form>
</div>
@endsection