<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

   protected $fillable=['name','description', 'price','image','category_id'];

   public function category()
   {
    return	$this->belongsTo(Category::class);
   }

   public function images()
    {
    	return $this->hasMany(ProductImagen::class);
    }
}

