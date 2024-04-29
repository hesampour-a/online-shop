<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cart extends Model
{
    use HasFactory;


    protected $fillable = [
        'status',
    ];

    public static array $status = ['فعال', 'در حال آماده سازی', 'ارسال شده', 'تحویل شده'];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function cart_item(): HasMany
    {
        return $this->hasMany(CartItem::class);
    }
}
