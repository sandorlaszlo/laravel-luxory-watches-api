<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    use HasFactory;

    /**
     * Get all of the watches for the Brand
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function watches(): HasMany
    {
        return $this->hasMany(Watch::class, 'Brand_id', 'id');
    }
}
