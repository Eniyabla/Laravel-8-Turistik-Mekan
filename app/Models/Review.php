<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable=[
        'place_id',
        'user_id',
        'ip',
        'subject',
        'review',
        'rate',
];
    public function place(){
        return $this.$this->belongsTo(Product::class);
    }
    public function user(){
        return $this.$this->belongsTo(User::class);
    }
}
