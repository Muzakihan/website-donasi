<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    // use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'donate_id',
        'username',
        'email',
        'description',
        'description',
        'donate_price',
    ];

    protected $hidden = [];

    public function donate()
    {
        return $this->belongsTo(Donate::class, 'donate_id', 'id');
    }
}
