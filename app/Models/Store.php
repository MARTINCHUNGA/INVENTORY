<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    public function product(){
        // store has many products
        return $this->belongsToMany(product::class)->withPivot()->withTimestamps();
    }

    public function categories(){
        // Store has many categories
        return $this->belongsToMany(Category::class)->withPivot()->withTimestamps();
    }

    public function brands(){
        //Store can be served many brands
        return $this->belongsToMany(brand::class)->withPivot()->withTimestamps();
    }
}
