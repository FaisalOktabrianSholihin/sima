<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'jenis_barang_id',
        'merk',
        'spesifikasi',
        'status',
        'qr_code',
    ];

    public function jenisBarang()
    {
        return $this->belongsTo(JenisBarang::class, 'jenis_barang_id');
    }

    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function sets()
    {
        return $this->belongsToMany(
            Set::class,
            'set_details',
            'barang_id',
            'set_id'
        )->withTimestamps();
    }
}
