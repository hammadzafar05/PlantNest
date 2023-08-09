<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantInfo extends Model
{
    use HasFactory;
protected $fillable = ['product_id', 'habits', 'lights', 'water_requirements', /* ... */];

public function product()
{
    return $this->belongsTo(Product::class);
}
}
