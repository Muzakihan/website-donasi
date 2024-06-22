<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Article extends Model implements HasMedia
{
    // use HasFactory;
    use SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'category_article_id',
        'title',
        'content',
        'photos',
    ];

    protected $hidden = [];

    public function categoryArticle()
    {
        return $this->belongsTo(CategoryArticle::class, 'category_article_id', 'id');
    }
}
