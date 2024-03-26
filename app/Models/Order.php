<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;
    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }
    public function shippingAddress(){
        return $this->belongsTo(Address::class, 'shipping_address_id');
    }
    public function payments(){
        return $this->hasMany(Payment::class);
    }
    public function product(){
        return $this->belongsToMany(Product::class);
    }
    public function cart(){
        return $this->belongsTo(Cart::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
