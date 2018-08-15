<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileUsers extends Model
{
    protected $table = 'profile_users';
    protected $fillable = ['id','users_id','first_name','last_name','phone','birthday','sex','job','address','current_address','created_at','updated_at'];
}
