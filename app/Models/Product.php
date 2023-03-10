<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    public function productOptions(): HasMany
    {
        return $this->hasMany(ProductOption::class);
    }

    public function productOptionValues(): HasMany {
        return $this->hasMany(ProductOptionValue::class);
    }
}