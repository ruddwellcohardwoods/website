<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'sub_categories';

    protected $fillable = ['category_id', 'name', 'description'];

    // A subcategory belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // A subcategory has many products
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
