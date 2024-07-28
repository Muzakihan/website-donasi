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

    public static function boot()
    {
        parent::boot();

        static::saving(function ($transaction) {
            $transaction->phone_number = self::formatPhoneNumber($transaction->phone_number);
        });
    }

    private static function formatPhoneNumber($phone_number)
    {
        // Jika nomor telepon dimulai dengan '0', ubah menjadi '62'
        if (substr($phone_number, 0, 1) === '0') {
            return '62' . substr($phone_number, 1);
        }

        return $phone_number;
    }
}
