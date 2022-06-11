<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    public  function comments(){
        return $this->hasMany(Comment::class);
    }

    #many to one
    public  function category(){
        return $this->belongsTo(Category::class);
    }



}
