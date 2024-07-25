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
        'description',
        'donate_price',
        'snap_token',
    ];

    protected $hidden = [];

    public function donate()
    {
        return $this->belongsTo(Donate::class, 'donate_id', 'id');
    }

    protected static function booted()
    {
        static::created(function ($transaction) {
            $donate = $transaction->donate;
            $donate->current_price += $transaction->donate_price;
            if ($donate->current_price >= $donate->goal_price) {
                $donate->status = 'success';
            } elseif ($donate->current_price <= $donate->goal_price) {
                $donate->status = 'pending';
            }
            $donate->save();
        });
    }
}
