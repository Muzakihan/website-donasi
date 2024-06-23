<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

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
