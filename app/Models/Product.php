<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subcategory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'subcategory_id', 'featured', 'image'];

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function isFeatured()
    {
        return $this->featured == TRUE;
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    public function scopeNotFeatured($query)
    {
        return $query->where('featured', false);
    }
}
