<?php

namespace App\Models\Admin;

use App\Models\Admin\Photography;
use App\Models\Admin\PhotographyPlan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PhotographyCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'image'
    ];

    public function photographies()
    {
        return $this->hasMany(Photography::class, 'photography_category_id');
    }

    public function plans()
    {
        return $this->hasMany(PhotographyPlan::class, 'photography_category_id');
    }
}