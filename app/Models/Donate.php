<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\InteractsWithMedia;

class Donate extends Model
{
    // use HasFactory;
    use SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'category_donate_id',
        'name',
        'thumbnail_description',
        'description',
        'goal_price',
        'current_price',
        'photos'
    ];

    protected $hidden = [];

    public function categoryDonate()
    {
        return $this->belongsTo(CategoryDonate::class, 'category_donate_id', 'id');
    }
    
}
