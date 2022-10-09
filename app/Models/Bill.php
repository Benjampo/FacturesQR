<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'client_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class); // Omit the second parameter if you're following convention
    }
    public function client()
    {
        return $this->belongsTo(Client::class); // Omit the second parameter if you're following convention
    }
    protected static function booted()
    {
        static::creating(function ($product) {
            $product->user_id = Auth::id();
        });
    }

}
