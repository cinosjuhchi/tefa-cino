<?php

namespace App\Models;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KelasCategory extends Model
{
    use HasFactory;
    protected $table = 'kelas_category';
    protected $fillable = [
        'title',
        'body',
        'image',
    ];

    // KelasCategory.php (model)
    public function kelas():HasMany {
        return $this->hasMany(Kelas::class);
    }

}
