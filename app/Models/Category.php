<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function stores(){
        // Category belongs to many stores
        return $this->hasMany(Stores::class);
    }

    public function brands(){
        // category belongs to many Brands
        return $this->belongsToMany(brand::class)->withPivot()->withTimestamp;
    }

    public function products(){
        // category belongs to one product
        return $this->belongsTo(Product::class);
    }
}
