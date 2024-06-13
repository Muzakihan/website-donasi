<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\InteractsWithMedia;

class Program extends Model
{
    // use HasFactory;
    use SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'category_program_id',
        'title',
        'content',
        'photos'
    ];

    protected $hidden = [];

    public function categoryProgram()
    {
        return $this->belongsTo(CategoryProgram::class, 'category_program_id', 'id');
    }
}
