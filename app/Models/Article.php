<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Article extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

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

    protected static function boot()
    {
        parent::boot();

        /** @var Model $model */
        static::deleting(function ($model) {
            if (!empty($model->photos) && Storage::disk('public')->exists($model->photos)) {
                Storage::disk('public')->delete($model->photos);
            }

            if ($model->content) {
                $dom = new \DOMDocument();
                @$dom->loadHTML($model->content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
                $images = $dom->getElementsByTagName('img');
                foreach ($images as $img) {
                    $src = $img->getAttribute('src');
                    // Mendapatkan path relatif dari URL
                    $relativePath = str_replace(url('/') . '/storage/', '', $src);
                    // Menghapus file dari storage
                    if (Storage::disk('public')->exists($relativePath)) {
                        Storage::disk('public')->delete($relativePath);
                    }
                }
            }
        });

        static::updating(function ($model) {
            if ($model->isDirty('photos') && ($model->getOriginal('photos') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('photos'));
            }

            if ($model->isDirty('content') && ($model->getOriginal('content') !== null)) {
                $dom = new \DOMDocument();
                @$dom->loadHTML($model->getOriginal('content'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
                $images = $dom->getElementsByTagName('img');
                foreach ($images as $img) {
                    $src = $img->getAttribute('src');
                    // Mendapatkan path relatif dari URL
                    $relativePath = str_replace(url('/') . '/storage/', '', $src);
                    // Menghapus file dari storage
                    if (Storage::disk('public')->exists($relativePath)) {
                        Storage::disk('public')->delete($relativePath);
                    }
                }
            }
        });
    }
}
