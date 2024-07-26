<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Spécifie les attributs qui peuvent être assignés en masse
    protected $fillable = ['name', 'details'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
