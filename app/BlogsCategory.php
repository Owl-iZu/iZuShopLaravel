<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogsCategory extends Model
{
    protected $table = 'blogs_categories';
    protected $fillable = ['id','name','url','descriptions','images','created_at','updated_at'];
}
