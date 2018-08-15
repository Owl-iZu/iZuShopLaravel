<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogsPost extends Model
{
    protected $table = 'blogs_post';
    protected $fillable = [	'id','name','url','images','content','short_content','cat_id','created_at','updated_at'];
}
