<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    //
    protected $table = 'product_categories';

    public function products() : HasMany
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
