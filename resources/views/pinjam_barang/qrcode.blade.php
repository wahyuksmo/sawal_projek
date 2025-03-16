@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h2 class="mb-3">QR Code Barang</h2>
    <p><strong>Nama Peminjam:</strong> {{ $barang->nama_peminjam }}</p>
    <p><strong>Kode Barang:</strong> {{ $barang->kode_barang }}</p>
    
    <div class="mb-3">
        {!! $qrCode !!}
    </div>

    <a href="{{ route('pinjam_barang.index') }}" class="btn btn-primary">Kembali</a>
</div>
@endsection
