<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CartItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'count',
        'cart_id',
        'product_id'
    ];

    public static function booted()
    {
        static::updated(fn (CartItem $cartItem) => cache()->forget('cart' . $cartItem->cart_id));
        static::deleted(fn (CartItem $cartItem) => cache()->forget('cart' . $cartItem->cart_id));
    }
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class);
    }
}
