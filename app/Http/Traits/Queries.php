<?php

namespace App\Http\Traits;

trait Queries
{
    /**
     * Get data with pagination
     *
     * @return object
     */

    public static function getAll(): object
    {
        return self::latest()
            ->paginate(6);
    }

    /**
     * Get specified data by slug
     * 
     * @param string $slug
     * @return object
     * 
     */

    public static function getBySlug(string $slug): object
    {
        return self::where(['slug' => $slug])
            ->firstOrFail();
    }
}
