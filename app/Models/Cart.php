<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cart extends Model
{
    use HasFactory;


    protected $fillable = [
        'status',
        'user_id'
    ];
    public static function booted()
    {
        static::updated(fn (Cart $cart) => cache()->forget('cart' . $cart->id));
        static::deleted(fn (Cart $cart) => cache()->forget('cart' . $cart->id));
    }

    public function scopeCartProducts(Builder $query)
    {
        return $query->join('users', 'users.id', '=', 'carts.user_id')
            ->where('carts.user_id', '=', auth()->user()->id)
            ->where('carts.status', '=', 'فعال')
            ->join('cart_items', 'carts.id', '=', 'cart_items.cart_id')
            ->join('products', 'cart_items.product_id', '=', 'products.id')
            ->join('product_images', 'products.id', '=', 'product_images.product_id')
            ->select('products.*', 'cart_items.count', 'product_images.img_path', 'cart_items.id as cart_item_id')
            ->get();
    }


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
