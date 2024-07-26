<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Donate extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'category_donate_id',
        'name',
        'thumbnail_description',
        'description',
        'goal_price',
        'current_price',
        'photos',
        'status'
    ];

    protected $hidden = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($donate) {
            if (is_null($donate->status)) {
                $donate->status = 'pending';
            }
        });
    }

    public function categoryDonate()
    {
        return $this->belongsTo(CategoryDonate::class, 'category_donate_id', 'id');
    }
}
