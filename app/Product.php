<?php

namespace App;
use DB; 

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_name', 'product_price', 'product_height', 'product_width', 'product_weight', 'category_row_id', 'product_sku', 'is_featured', 'is_latest', 'product_short_description', 'product_long_description']; 

    public function getCategory(){
        return $this->hasOne('App\Models\Category', 'category_row_id', 'category_row_id');
    }
}
