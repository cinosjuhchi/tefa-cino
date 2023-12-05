<?php

namespace App\Models;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KelasCategory extends Model
{
    use HasFactory;
    protected $table = 'kelas_category';
    protected $fillable = [
        'title',
        'body',
        'image',
    ];

    public function kelas() {
        return $this->hasMany(Kelas::class);
    }
}
