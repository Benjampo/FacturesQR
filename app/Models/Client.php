<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'address',
        'zipcode',
        'city',
        'phone',
        'email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class); // Omit the second parameter if you're following convention
    }
    public function bill()
    {
        return $this->hasMany(Bill::class); // Omit the second parameter if you're following convention
    }
    protected static function booted()
    {
        static::creating(function ($product) {
            $product->user_id = Auth::id();
        });
    }
}
