<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\KelasCategory;
use App\Models\PembelianKelas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KelasInti extends Model
{
    use HasFactory;
    protected $table = 'kelas_inti';
    protected $fillable = [
        'nama',
        'kategori_id',
        'deskripsi',
        'harga',
        'gambar',
    ];

    public function category(): BelongsTo {
        return $this->belongsTo(KelasCategory::class, 'kategori_id', 'id');
    }

    public function kelas(): HasMany {
        return $this->hasMany(Kelas::class, 'kelas_inti_id', 'id');
    }

    public function pembelianKelas(): HasMany {
        return $this->hasMany(PembelianKelas::class, 'kelas_inti_id');
    }

}
