<?php

namespace App\Models;

use App\Models\BuyClass;
use App\Models\KelasInti;
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
        return $this->belongsTo(KelasCategory::class, 'category_id', 'id');
    }

    public function buyClass(): HasMany {
        return $this->hasMany(BuyClass::class, 'kelas_id');
    }

    public function kelasInti(): BelongsTo {
        return $this->belongsTo(KelasInti::class, 'kelas_inti_id', 'id');
    }

    
}
