<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServicePrice extends Model
{
    protected $fillable = [
        'service_id', 'sku', 'name', 'description', 'price_type',
        'price', 'max_price', 'discount_price', 'unit',
        'price_currency', 'price_valid_until', 'availability',
        'sort_order', 'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'price' => 'decimal:2',
        'max_price' => 'decimal:2',
        'discount_price' => 'decimal:2',
        'price_valid_until' => 'date',
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
