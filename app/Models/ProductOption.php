<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductOption extends Model
{
    protected $fillable = ['name', 'visual'];

    public function product(): BelongsTo {
        return $this->belongsTo(Product::class);
    }

    public function productOptionValues(): HasMany {
        return $this->hasMany(ProductOptionValue::class);
    }
}
