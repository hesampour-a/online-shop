<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'count',
        'price',
        'description',
        'title'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function cart_item(): HasMany
    {
        return $this->hasMany(CartItem::class);
    }
    public function product_color(): HasMany
    {
        return $this->hasMany(ProductColor::class);
    }
    public function product_size(): HasMany
    {
        return $this->hasMany(ProductSize::class);
    }
    public function product_image(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }
}
