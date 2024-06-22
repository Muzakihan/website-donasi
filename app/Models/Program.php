<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Program extends Model implements HasMedia
{
    // use HasFactory;
    use SoftDeletes, InteractsWithMedia;

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
}
