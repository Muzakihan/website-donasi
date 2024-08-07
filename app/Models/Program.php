<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Program extends Model implements HasMedia
{

    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'category_program_id',
        'title',
        'description',
        'program_objective',
        'photos',
    ];

    protected $hidden = [];

    protected $casts = [
        'photos' => 'array'
    ];

    public function categoryProgram()
    {
        return $this->belongsTo(CategoryProgram::class, 'category_program_id', 'id');
    }

    protected static function boot()
    {
        parent::boot();

        /** @var Model $model */
        static::deleting(function ($model) {
            if (!empty($model->photos)) {
                foreach ($model->photos as $photo) {
                    if (Storage::disk('public')->exists($photo)) {
                        Storage::disk('public')->delete($photo);
                    }
                }
            }
        });

        static::updating(function ($model) {
            if ($model->isDirty('photos')) {
                $photosToDelete = array_diff($model->getOriginal('photos') ?? [], $model->photos ?? []);

                foreach ($photosToDelete as $photo) {
                    if (Storage::disk('public')->exists($photo)) {
                        Storage::disk('public')->delete($photo);
                    }
                }
            }
        });
    }

}
