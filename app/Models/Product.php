<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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
        'title',
        'sizes',
        'colors',
        'garanty',
        'long_description',
        'fa_title',
        'category_id',
        'product_brand_id'

    ];

    public static function booted()
    {
        static::updated(fn (Product $product) => cache()->forget('product' . $product->id));
        static::deleted(fn (Product $product) => cache()->forget('product' . $product->id));
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function cart_item(): HasMany
    {
        return $this->hasMany(CartItem::class);
    }

    public function product_image(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }

    public function product_brand(): BelongsTo
    {
        return $this->belongsTo(ProductBrand::class);
    }


    public function scopeFilter(Builder $query, array $filters): Builder
    {
        return $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->where(function ($query)  use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%');
            });
        })->when($filters['min_price'] ?? null, function ($query, $min_price) {
            $query->where('price', '>=', $min_price);
        })->when($filters['max_price'] ?? null, function ($query, $max_price) {
            $query->where('price', '<=', $max_price);
        })->when($filters['brand'] ?? null, function ($query, $brand) {
            $query->whereHas('product_brand', function ($query) use ($brand) {
                $query->where('name', 'like', '%' . $brand . '%');
            });
        })->when($filters['category'] ?? null, function ($query, $category) {
            $query->whereHas('category', function ($query) use ($category) {
                $query->where('name', 'like', '%' . $category . '%');
            });
        });
    }
}
