<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function reviews(){
        return $this->belongsToMany(Review::class);
    }

    public function likes(){
        return $this->hasMany(LikeDislike::class);
    }


}
