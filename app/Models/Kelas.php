<?php

namespace App\Models;

use App\Models\KelasCategory;
use App\Models\PembelianKelas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';

    protected $fillable = [
        'nama',
        'link_vid',
        'deskripsi',
        'harga',
        'gambar',
        'status',
        'category_id',
    ];

    public function category(): BelongsTo {
        return $this->belongsTo(KelasCategory::class);
    }

    public function pembelianKelas(): HasMany {
        return $this->hasMany(PembelianKelas::class, 'kelas_id');
    }
}
