<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug', 'title', 'category', 'excerpt', 'description', 'icon', 'image_url',
        'starting_price', 'price_label', 'rating', 'review_count', 'delivery_time',
        'features', 'featured',
    ];

    protected $casts = [
        'features' => 'array',
        'featured' => 'boolean',
    ];

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}

