<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    use HasFactory;
    protected $fillable = ['describtion','product_id'];
    public function Product(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
