<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImagen extends Model
{
    protected $guarded=[];

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}
