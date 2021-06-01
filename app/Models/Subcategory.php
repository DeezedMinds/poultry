<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Product;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'category_id'];
    protected $appends = ['full_name'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public static function birdProducts()
    {
        return self::with('products')->birds()->get()->pluck('products');
    }

    public static function pigProducts()
    {
        return self::with('products')->birds()->get()->pluck('products');
    }

    public function isBird()
    {
        return $this->category->group_id == Category::BIRD_ID;
    }

    public function isPig()
    {
        return $this->category->group_id == Category::PIG_ID;
    }

    public static function scopeBirds($query)
    {
        return $query->whereIn('category_id', Category::birdIds());
    }

    public function scopePigs($query)
    {
        return $query->whereIn('category_id', Category::pigsIds());
    }

    public function getFullNameAttribute()
    {
        return "{$this->category->name} - {$this->name}";
    }
}
