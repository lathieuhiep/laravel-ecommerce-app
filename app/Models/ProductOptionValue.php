<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductOptionValue extends Model
{
    public function productOption(): BelongsTo {
        return $this->belongsTo(ProductOption::class);
    }
}
