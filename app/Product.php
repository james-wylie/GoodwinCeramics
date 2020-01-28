<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'imageOne', 'imageTwo', 'price', 'height', 'width', 'color', 'sold'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
