<?php

namespace App\Models;

use App\Models\KelasCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';

    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'gambar',
        'status',
        'category_id',
    ];

    public function category() {
        return $this->belongsTo(KelasCategory::class);
    }
}
