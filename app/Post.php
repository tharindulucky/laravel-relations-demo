<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function getUserRelation(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function getCommentsRelation(){
        return $this->hasMany('App\Comment', 'post_id', 'id');
    }
}
