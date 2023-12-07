<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembelianKelas extends Model
{
    use HasFactory;
    
    protected $table = 'pembelian_kelas';

    protected $fillable = [
        'user_id',
        'kelas_id',
        'tanggal_pembelian'
    ];

}
