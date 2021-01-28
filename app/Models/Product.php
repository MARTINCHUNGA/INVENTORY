<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     use HasFactory;

    public function brands(){
        // product belongs to many Brands
        return $this->belongsToMany(brand::class)->withPivot()->withTimestamps();
    }

    public function stores(){
        // product belongs to many stores
        return $this->hasMany(store::class);
    }

    public function users(){
        // product will be added by single user
        return $this->belongsTo(User::class);
    }

    public function categories(){
        // product has many categories
        return $this->hasMany(Category::class);
    }
}
