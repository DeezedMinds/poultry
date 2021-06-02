<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductSubcategory extends Pivot
{
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}