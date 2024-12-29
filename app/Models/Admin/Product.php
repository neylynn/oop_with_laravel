<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'sku', 'price', 'category_id'];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
