<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PinjamBarang;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PinjamBarangController extends Controller
{
    public function index()
    {
        $data = PinjamBarang::all();
        return view('pinjam_barang.index', compact('data'));
    }

    public function create()
    {
        return view('pinjam_barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_peminjam' => 'required',
            'kelas_peminjam' => 'required',
            'kode_barang' => 'required',
            'tanggal_dipinjam' => 'required|date',
            'status' => 'required|in:Tersedia,Dipinjam',
        ]);

        PinjamBarang::create($request->all());

        return redirect()->route('pinjam_barang.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(PinjamBarang $pinjam_barang)
    {
        return view('pinjam_barang.edit', compact('pinjam_barang'));
    }

    public function update(Request $request, PinjamBarang $pinjam_barang)
    {
        $request->validate([
            'nama_peminjam' => 'required',
            'kelas_peminjam' => 'required',
            'kode_barang' => 'required',
            'tanggal_dipinjam' => 'required|date',
            'status' => 'required|in:Tersedia,Dipinjam',
        ]);

        $pinjam_barang->update($request->all());

        return redirect()->route('pinjam_barang.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(PinjamBarang $pinjam_barang)
    {
        $pinjam_barang->delete();

        return redirect()->route('pinjam_barang.index')->with('success', 'Data berhasil dihapus');
    }

    public function generateQRCode($id)
    {
        $barang = PinjamBarang::findOrFail($id);

        $qrCodeData = "Nama Peminjam: " . $barang->nama_peminjam . "\nKode Barang: " . $barang->kode_barang;
        
        $qrCode = QrCode::size(300)->generate($qrCodeData);

        return view('pinjam_barang.qrcode', compact('barang', 'qrCode'));
    }
}
