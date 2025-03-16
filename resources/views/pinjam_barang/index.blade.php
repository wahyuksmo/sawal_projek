@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-3">Daftar Peminjaman Barang</h2>
    
    <a href="{{ route('pinjam_barang.create') }}" class="btn btn-primary mb-3">Tambah Peminjaman</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Peminjam</th>
                <th>Kelas</th>
                <th>Kode Barang</th>
                <th>Tanggal Dipinjam</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->nama_peminjam }}</td>
                <td>{{ $item->kelas_peminjam }}</td>
                <td>{{ $item->kode_barang }}</td>
                <td>{{ $item->tanggal_dipinjam }}</td>
                <td>
                    @if($item->status === 'Dipinjam')
                        <span class="badge bg-danger">Dipinjam</span>
                    @else
                        <span class="badge bg-success">Tersedia</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('pinjam_barang.qrcode', $item->id) }}" class="btn btn-info btn-sm">QR Code</a>

                    <form action="{{ route('pinjam_barang.destroy', $item->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
