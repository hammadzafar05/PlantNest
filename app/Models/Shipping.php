<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;
protected $fillable = ['delivery_id', 'from', 'to', /* ... */];

public function delivery()
{
    return $this->belongsTo(Delivery::class);
}
}
