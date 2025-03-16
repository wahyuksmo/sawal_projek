@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Peminjaman</h2>

    <form action="{{ route('pinjam_barang.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Peminjam</label>
            <input type="text" name="nama_peminjam" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kelas Peminjam</label>
            <input type="text" name="kelas_peminjam" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kode Barang</label>
            <input type="text" name="kode_barang" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tanggal Dipinjam</label>
            <input type="date" name="tanggal_dipinjam" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="Tersedia">Tersedia</option>
                <option value="Dipinjam">Dipinjam</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('pinjam_barang.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
