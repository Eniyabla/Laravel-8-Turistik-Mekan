<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Conner\Likeable\Likeable;
class Product extends \Illuminate\Database\Eloquent\Model {

    use HasFactory,Likeable;

    protected $fillable = [
        'title',
        'image',
        'city',
        'country',
        'location',
        'id',
        'status'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function reviews(){
        return $this->belongsToMany(Review::class);
    }




}
