<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $table = 'likes';
    protected $fillable = ['user_id', 'product_id'];
    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
