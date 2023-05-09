<?php

namespace App\Models\Admin;

use App\Helpers\MixCaseULID;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\PhotographyPlan;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photography extends Model
{
    use HasFactory;

    /**
     *  Setup model event hooks
     */
    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->ulid = MixCaseULID::generate();
        });
    }

    protected $fillable = [
        'photography_plan_id',
        'name_customer',
        'number_customer',
        'email_customer',
        'description'
    ];

    public function plan()
    {
        return $this->belongsTo(PhotographyPlan::class, 'photography_plan_id');
    }
}