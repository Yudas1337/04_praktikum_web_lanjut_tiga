<?php

namespace App\Models;

use App\Http\Traits\Queries;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, Queries;
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = ['id', 'name', 'image', 'content', 'price', 'slug'];

    /**
     * Get the latest products for homepage
     *
     * @return object
     */

    public static function latestProducts(): object
    {
        return self::select('name', 'image', 'price', 'slug')
            ->take(8)
            ->latest()
            ->get();
    }

    /**
     * Get the featured products for homepage
     *
     * @return object
     */

    public static function featuredProducts(): object
    {
        return self::select('name', 'image', 'price', 'slug')
            ->inRandomOrder()
            ->take(3)
            ->get();
    }
}
