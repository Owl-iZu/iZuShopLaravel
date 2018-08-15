<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsCategory extends Model
{
    protected $table = 'products_category';
    protected $fillable = ['id','category_name','url','images','desc','created_at','updated_at'];
}
