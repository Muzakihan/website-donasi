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

    public function categoryDonate()
    {
        return $this->belongsTo(CategoryDonate::class, 'category_donate_id', 'id');
    }
    // public function transactions()
    // {
    //     return $this->hasMany(Transaction::class, 'donate_id');
    // }
}
