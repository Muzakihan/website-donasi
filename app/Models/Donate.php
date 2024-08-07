<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

        static::saving(function ($donate) {
            if ($donate->current_price >= $donate->goal_price) {
                $donate->status = 'success';
            }
        });
    }

    public function categoryDonate()
    {
        return $this->belongsTo(CategoryDonate::class, 'category_donate_id', 'id');
    }
}
