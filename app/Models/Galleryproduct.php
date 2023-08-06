<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galleryproduct extends Model
{
    use HasFactory;
    protected $fillable = ['gallery','product_id'];


    public function product(){
        return $this->belongsTo(Product::class,'product_id');
     }
}
