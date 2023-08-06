<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['detail_id','category_id','photo','name','price','offer','discount','describtion'];


    public function category(){
        return $this->belongsTo(category::class,'category_id');
     }
     public function Detail(){
        return $this->belongsTo(Detail::class,'detail_id');
    }
    public function ProductAttribute(){
        return $this->hasOne(ProductAttribute::class);
    }
    public function gallery(){
        return $this->hasMany(Galleryproduct::class);
    }
    public function reviews(){
        return $this->hasMany(Review::class);
    }
   
}
