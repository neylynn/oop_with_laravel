<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'parent_id'];

    public function parent(){
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function category(){
        return $this->hasMany(Product::class, 'category_id');
    }
}
