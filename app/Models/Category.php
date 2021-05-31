<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subcategory;

class Category extends Model
{
    use HasFactory;

    const NOT_DEFINED_ID = 0;
    const BIRD_ID = 1;
    const PIG_ID = 2;
    const NOT_DEFINED_NAME = 'Sin definir';
    const BIRD_NAME = 'Aves';
    const PIG_NAME = 'Cerdos';

    const GROUPS = [
        self::NOT_DEFINED_ID => self::NOT_DEFINED_NAME,
        self::BIRD_ID => self::BIRD_NAME,
        self::PIG_ID => self::PIG_NAME
    ];

    protected $fillable = ['name', 'image', 'group_id'];

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    public static function birdProducts()
    {
        return self::with('subcategories.products')->birds()->get();
    }

    public static function pigProducts()
    {
        return self::with('subcategories.products')->pigs()->get();
    }

    public function scopeBirds($query)
    {
        return $query->where('group_id', Category::BIRD_ID);
    }

    public static function birdIds()
    {
        return self::birds()->pluck('id');
    }
    
    public static function pigsIds()
    {
        return self::pigs()->pluck('id');
    }
    
    public function scopePigs($query)
    {
        return $query->where('group_id', Category::PIG_ID);
    }
}
