<?php

namespace App\Models;

use App\Models\User;
use App\Models\KelasInti;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BuyClass extends Model
{
    use HasFactory;
    protected $table = 'buy_class';
    protected $fillable = [
        'user_id',
        'kelas_id',
        'nama_customer',
        'email_customer',
        'total',
        'deskripsi',
        'status',
    ];

    /**
     * Get the user that owns the BuyClass
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function kelas(): BelongsTo
    {
        return $this->belongsTo(KelasInti::class, 'kelas_id', 'id');
    }
}
