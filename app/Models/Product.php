<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public function reviews(): HasMany
    {
        return $this->hasMany(ProductReview::class);
    }

    public function category(): BelongsTo
    {
        return $this->BelongsTo(ProductCategory::class);
    }

    public function OderItem(): BelongsTo
    {
        return $this->BelongsTo(OrderItem::class);
    }

    public function payment(): BelongsTo
    {
        return $this->BelongsTo(Payment::class);
    }

    public function cart(): BelongsTo
    {
        return $this->BelongsTo(Cart::class);
    }
}
