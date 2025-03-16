@extends('layouts.app')

@section('content')

<h2>Selamat Datang, {{ auth()->user()->name }}!</h2>

@endsection