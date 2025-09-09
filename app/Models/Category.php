<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'categories';

    protected $fillable = ['name', 'description'];

    // A category has many subcategories
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    // A category has many products (direct relationship)
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
