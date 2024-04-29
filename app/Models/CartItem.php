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
    ];
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class);
    }
}
