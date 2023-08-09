<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;
protected $fillable = ['order_id', 'billing_address', 'phone', /* ... */];

public function order()
{
    return $this->belongsTo(Order::class);
}
}
