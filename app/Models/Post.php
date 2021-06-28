<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Userとの紐付け　子
    public function user(){
        return $this->belongsTo('APP\User');
    }
}
