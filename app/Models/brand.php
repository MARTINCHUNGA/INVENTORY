<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    use HasFactory;

    public function products(){
        // Brand has many products
        return $this->hasMany(product::class);
    }

    public function stores(){
        //Brand can  served  many stores
        return $this->hasMany(Store::class);
    }

    public function categories(){
        // has many categories
        return $this->hasMany(Category::class);
    }
}
