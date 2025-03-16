<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinjamBarang extends Model
{
    use HasFactory;

    protected $table = 'pinjam_barang';

    protected $fillable = [
        'nama_peminjam',
        'kelas_peminjam',
        'kode_barang',
        'tanggal_dipinjam',
        'status',
    ];
}
