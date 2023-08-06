<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['category','photo','parent'];


    public function subcategories()
    {
        return $this->hasMany(Category::class,'parent');
    }

    public function children()
    {
        return $this->hasMany(Category::class,'parent');
    }
    public function gallery()
    {
        return $this->hasMany(CategoryAttribute::class);
    }


    public function products(){
       return $this->hasMany(Product::class);
    }

}
