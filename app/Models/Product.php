<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name',
        'species',
        'price',
        'discount',
        'description',
        'purpose',
        'stock',
        'status',
        'category_id',
    ];
    protected $appends = ['discount_percentage'];

    public function getDiscountPercentageAttribute()
    {
        if ($this->discount > 0 && $this->discount < 100) {
            return round(($this->discount / $this->price) * 100);
        }

        return null;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function plantInfo()
    {
        return $this->hasOne(PlantInfo::class);
    }
    public function wishlistItems(){
        return $this->hasMany(WishlistItem::class);

    }
}
