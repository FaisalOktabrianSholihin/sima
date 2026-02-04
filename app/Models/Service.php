<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'barang_id',
        'set_id',
        'tanggal_service',
        'jenis_kerusakan',
        'tindakan',
        'teknisi',
        'status',
    ];

    protected $dates = [
        'tanggal_service',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }

    public function set()
    {
        return $this->belongsTo(Set::class);
    }
}
