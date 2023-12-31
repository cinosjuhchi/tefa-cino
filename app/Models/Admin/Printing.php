<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Printing extends Model
{
    use HasFactory;

    protected $fillable = [
        'material',
        'scale',
        'file_name',
        'file_content',
    ];

    protected $appends = ['order_title'];

    public function order(): MorphOne
    {
        return $this->morphOne(Order::class, 'orderable');
    }

    public function getOrderTitleAttribute()
    {
        return 'Printing';
    }
}
