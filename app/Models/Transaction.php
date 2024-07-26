<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'donate_id',
        'username',
        'email',
        'phone_number',
        'hope_for_foundation',
        'hope_for_you',
        'donate_price',
        'snap_token',
    ];

    protected $hidden = [];

    public function donate()
    {
        return $this->belongsTo(Donate::class, 'donate_id', 'id');
    }
}
