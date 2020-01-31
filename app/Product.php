<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'imageOne', 'imageTwo', 'price', 'height', 'width', 'color', 'sold'
    ];

       public function path()
    {
        return "/products/{$this->id}";
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
