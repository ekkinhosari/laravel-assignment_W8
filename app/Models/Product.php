<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function product_categories():BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }
}
