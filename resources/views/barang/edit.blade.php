@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h4>Edit Barang</h4>
    <form action="{{ route('barang.update', $barang->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" value="{{ $barang->nama_barang }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Kode Barang</label>
            <input type="text" name="kode_barang" class="form-control" value="{{ $barang->kode_barang }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">RF ID Barang</label>
            <input type="text" name="rf_id" class="form-control" value="{{ $barang->rf_id }}" required>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('barang.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
