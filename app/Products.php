<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = ['id','name','url','content','short_content','image','price','category_id','created_at','updated_at'];
}
