<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guard = [];

    public function product(){
        return $this->hasMany(Product::class);
    }

    public function supplier(){
        return $this->belongsToMany(Supplier::class);
    }
}
