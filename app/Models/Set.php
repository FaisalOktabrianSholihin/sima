<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    use HasFactory;

    protected $table = 'sets';

    protected $fillable = [
        'kode_set',
        'user_id',
        'qr_code',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function barangs()
    {
        return $this->belongsToMany(
            Barang::class,
            'set_details',
            'set_id',
            'barang_id'
        )->withTimestamps();
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
